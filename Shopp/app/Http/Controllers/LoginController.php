<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Symfony\Component\HttpFoundation\IpUtils;

class LoginController extends Controller
{
    public function index() {
        return view('auth.index');
    }

    public function signUp() {
        return view('auth.sign-up');
    }

    public function login(Request $request) {

        $recaptcha = $request->input('g-recaptcha-response');
        if (is_null($recaptcha)) {
            return  Redirect::route('login');
        } else {
            try {
                $result =  Firebase::auth()->signInWithEmailAndPassword($request->email, $request->password);
                Session::put('user_id', $result->firebaseUserId());
                return Redirect::route('landing');
            } catch (Exception $e) {
                return  Redirect::route('login');
            }
        }

    }

    public function register(Request $request) {

        try {
           Firebase::auth()->createUserWithEmailAndPassword($request->email, $request->password);
            return Redirect::route('login');
        } catch (Exception $e) {
            return  Redirect::route('sign-up');
        } catch (AuthException $e) {
            return  Redirect::route('sign-up');
        } catch (FirebaseException $e) {
            return  Redirect::route('sign-up');
        }
    }

    public function getUser() {

        if (Session::get('user_id') != null) {
            $user = Firebase::auth()->getUser(Session::get('user_id'));
           return $user->email;
        }
        return Firebase::auth()->getUser('jMEvISzktHfVSWYZKbwNbMwanhw2');
    }
}
