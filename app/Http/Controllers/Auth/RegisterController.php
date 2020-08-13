<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\Verification;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Database\Eloquent\Concerns\HasTimestamps;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    use HasTimestamps;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Sending email to verify new account
     */
    protected function verify(array $data) {
        $email = $data['email'];
        $name = $data['name'];
        $subject = 'VERIFIED NEW ACCOUNT';
        $token_verify = md5($name).md5($name).md5($name);

        Verification::create([
           'user_id' => Auth::user()->id,
            'token' => $token_verify,
            'created_at' => $this->freshTimestamp(),
            'updated_at' => $this->freshTimestamp(),
        ]);

        Mail::send('auth.verify',
            [
                'name' => $name,
                'token' => $token_verify
            ], function ($mail) use ($email, $name, $subject) {
                $mail->to($email, $name)->subject($subject);
                $mail->from(env('MAIL_USERNAME'), $name);
            });
    }

    public function processVerify($token) {
        Log::info($token);
    }
}
