<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SociaController extends Controller
{
    //Login bằng Facebook
    public function FacebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {
            $user = Socialite::driver('facebook')->user();
            //Kiểm tra id Facebook người dùng
            $idUser = User::where('id_facebook', $user->id)->first();
            if ($idUser) {
                Auth::login($idUser);
                return redirect('/');
            } else {
                $createUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_facebook' => $user->getId(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId())
                ]);
                Auth::login($createUser);
                return redirect('/');
            }
        } catch (Exception $exception) {
            $exception->getMessage();
        }
    }

    //Login bằng google
    public function GoogleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginWithGoogle()
    {
        try {
            //Kiểm tra id Google người dùng
            $user = Socialite::driver('google')->user();
            $idUser = User::where('id_google', $user->id)->first();
            if ($idUser) {
                Auth::login($idUser);
                return redirect('/');
            } else {
                $createUser = User::create([
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'id_google' => $user->getId(),
                    'password' => Hash::make($user->getName() . '@' . $user->getId())
                ]);
                Auth::login($createUser);
                return redirect('/');
            }
        } catch (Exception $exception) {
            ($exception->getMessage());
        }
    }
}
