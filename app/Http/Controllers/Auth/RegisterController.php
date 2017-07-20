<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Model\Auth\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Ramsey\Uuid\Uuid;

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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * Go to registration form page.
     * 
     * @return [type]
     */
    public function registrationForm(){
        return view('pages.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password1' => 'required|string|min:6',
            'password2' => 'min:6|same:password1',
        ];

        return Validator::make($data, $rules);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password1']),
            'member_type' => 1,
            'active' => 1,
            'confirmed' => 1
        ]);

        return $user;
    }

    /**
     * @param  Request
     * @return [type]
     */
    public function register(Request $request){
        
        try {

            $result = $this->validator($request->all())->validate();

            event(new Registered($user = $this->create($request->all())));

            $this->guard()->login($user);

            // $name = $request['name'];
            // $email = $request['email'];
            // $password = bcrypt($request['password1']);
            // $memtype = 1;
            // $active = 1;
            // $confirmed = 1;

            // $result = DB::insert('INSERT INTO users 
            //     (NAME, EMAIL, PASSWORD, MEMBER_TYPE, ACTIVE, CONFIRMED)
            //     VALUES
            //     (?,?,?,?,?,?)', [$name, $email, $password, $memtype, $active,$confirmed]);

        } catch (Exception $e) {
            
        }

        
        return redirect(route('auth.loginForm'));
    }
}
