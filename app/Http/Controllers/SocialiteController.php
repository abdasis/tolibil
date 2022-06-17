<?php

namespace App\Http\Controllers;

use App\Mail\SocialitePasswordConfirm;
use App\Mail\SocialPasswordInformation;
use App\Models\SocialAccount;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        try {
            DB::beginTransaction();
            $user = Socialite::driver($provider)->stateless()->user();

            $auth_user = $this->findOrCreateUser($user, $provider);

            Auth::login($auth_user, true);
            DB::commit();
            return redirect()->route('dashboard');


        }catch (Exception $e){
            DB::rollBack();
            return redirect('/login');
        }

    }

    public function findOrCreateUser($user_account, $provider)
    {
        try {
            $account = SocialAccount::where('provider_id', $user_account->getId())
                ->where('provider', $provider)->first();
            if ($account) {
                return $account->user;
            } else {
                $user = User::where('email', $user_account->getEmail())->first();

                if (!$user){

                    $user = User::create([
                        'name' => $user_account->getName(),
                        'email' => $user_account->getEmail(),
                        'password' => bcrypt(Str::random(16)),
                        'profile_photo_path' => $user_account->getAvatar(),
                    ]);

                    Mail::to($user->email)->send(new SocialPasswordInformation($user));
                }

                $user->socialAccounts()->create([
                    'provider_id' => $user_account->getId(),
                    'provider' => $provider
                ]);

                return $user;
            }
        } catch (Exception $e) {
            return redirect('/login');
        }
    }
}
