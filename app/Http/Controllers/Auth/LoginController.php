<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;
use App\Models\User;
class LoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        // $user = Socialite::driver('google')->user();

        // $user->token;

        try {
            $user = Socialite::driver('google')->user();
            dd($user->token);
        } catch (\Exception $e) {
            return redirect('/login');
        }
        // only allow people with @company.com to login
        if(explode("@", $user->email)[1] !== 'gmail.com'){
            return redirect()->to('/');
        }
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->avatar          = $user->avatar;
            $newUser->avatar_original = $user->avatar_original;
            $newUser->save();
            auth()->login($newUser, true);
        }



        dd($newUser);
        return redirect()->to('/home');
    }

    public function signup(){
        // Get the API client and construct the service object.
        $client = $this->getClient();
        $service = new \Google_Service_Classroom($client);
        dd($service);
        // Print the first 10 courses the user has access to.
        $optParams = array('pageSize' => 10);
        $results = $service->courses->listCourses($optParams);

        if (count($results->getCourses()) == 0) {
        print "No courses found.\n";
        } else {
        print "Courses:\n";
        foreach ($results->getCourses() as $course) {
            printf("%s (%s)\n", $course->getName(), $course->getId());
        }
        }
    }


    protected function getClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName('Google Classroom API PHP Quickstart');
        $client->setScopes(\Google_Service_Classroom::CLASSROOM_COURSES_READONLY);
        $client->setAuthConfig(public_path('credentials.json'));
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        // Load previously authorized token from a file, if it exists.
        // The file token.json stores the user's access and refresh tokens, and is
        // created automatically when the authorization flow completes for the first
        // time.
        $tokenPath = public_path('token.json'); //get from DB
        if (file_exists($tokenPath)) {
            $accessToken = json_decode(file_get_contents($tokenPath), true);
            $client->setAccessToken($accessToken);
        }

        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                return redirect($authCode);
                echo 'Enter verification code: ';
                $authCode = trim(fgets(STDIN));

                // Exchange authorization code for an access token.
                $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
                $client->setAccessToken($accessToken);

                // Check to see if there was an error.
                if (array_key_exists('error', $accessToken)) {
                    throw new Exception(join(', ', $accessToken));
                }
            }
            // Save the token to a file.
            if (!file_exists(dirname($tokenPath))) {
                mkdir(dirname($tokenPath), 0700, true);
            }
            file_put_contents($tokenPath, json_encode($client->getAccessToken()));
        }
        return $client;
    }


    public function reqData(){
        $response = Http::get('https://classroom.googleapis.com/v1/courses',[
            'studentId' =>auth()->user()->google_id,
            'access_token'=> 'eRrEAtCmvCPO76dlzp3LDMnUgUcOsPqwePKL4VuD&code=4%2F0AY0e-g6QmoTxvUey5vbTRe6etr462Pjit2tQS_jKVzaFvLbBBsWuAyvHmEEVgkcsB-XY_w&scope=email+profile+openid+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.profile+https%3A%2F%2Fwww.googleapis.com%2Fauth%2Fuserinfo.email&authuser=0&prompt=consent#'
        ]);
        dd($response);
    }
}