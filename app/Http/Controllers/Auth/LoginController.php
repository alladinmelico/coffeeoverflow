<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Http;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        try {
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

            $client = new \Google_Client();
            $client->setApplicationName('Google Classroom API PHP Quickstart');
            $client->setScopes(\Google_Service_Classroom::CLASSROOM_COURSES);
            $client->setAuthConfig(public_path('credentials.json'));
            $client->setAccessType('offline');
            $client->setPrompt('select_account consent');
            $authUrl = $client->createAuthUrl();
            return redirect($authUrl);
        }
        return redirect()->to('/home');
    }

    public function signup(){
        // Get the API client and construct the service object.
        $client = $this->getClient();

        dd($client);
        dd(substr($client, 0, strpos($client, "code=")));
        return redirect($client);

        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
        $client->setAccessToken($accessToken);

    }

    public function signUpCallback(){
        $client = new \Google_Client();
        $client->setApplicationName('Google Classroom API PHP Quickstart');
        $client->setScopes(\Google_Service_Classroom::CLASSROOM_COURSES);
        $client->setAuthConfig(public_path('credentials.json'));
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        $authCode = request()->code.'&scope='.request()->scope;
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

        $user = User::find(Auth::user()->id);
        $user->access_token = json_encode($accessToken);
        $user->save();
    }


    protected function getClient()
    {
        $client = new \Google_Client();
        $client->setApplicationName('Google Classroom API PHP Quickstart');
        $client->setScopes(\Google_Service_Classroom::CLASSROOM_COURSES);
        $client->setAuthConfig(public_path('credentials.json'));
        $client->setAccessType('offline');
        $client->setPrompt('select_account consent');

        if(Auth::check()){
            $token = json_decode(auth()->user()->access_token, true); //get from DB
            if ($token != null) {
                $client->setAccessToken($token);
            }
        }

        // If there is no previous token or it's expired.
        if ($client->isAccessTokenExpired()) {
            // Refresh the token if possible, else fetch a new one.
            if ($client->getRefreshToken()) {
                $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
            } else {
                // Request authorization from the user.
                $authUrl = $client->createAuthUrl();
                return redirect($authUrl);
            }
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