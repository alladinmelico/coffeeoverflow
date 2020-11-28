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

        if(explode("@", $user->email)[1] !== 'gmail.com'){
            return redirect()->to('/');
        }

        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
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

    public function reqData(){
        $response = Http::get('https://classroom.googleapis.com/v1/courses',[
            'studentId' =>auth()->user()->google_id,
            'access_token'=> json_decode(auth()->user()->access_token)->access_token
        ]);
        dd($response->json());
    }
}