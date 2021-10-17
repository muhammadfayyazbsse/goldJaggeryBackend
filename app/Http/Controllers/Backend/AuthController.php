<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Where to redirect users after login.
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
        $this->middleware(['guest'])->except('logout');
    }

    public function login()
    {
        return view('login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return redirect("login")->with('error','Login details are not valid');
    }


    public function register()
    {
        return view('register');
    }


    public function customRegistration(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:3|max:20',
            'last_name' => 'required|min:3|max:20',
            'phone' => 'required|numeric|digits:11',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:16',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("home")->withSuccess('You have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }


    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
