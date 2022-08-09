<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    public function create() {
        return view('authentication.register', ['roles' => Role::all()]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            "name" => ["required", "unique:users,name", "min:6"],
            "first_name" => ["required"],
            "last_name" => [],
            "password" => ["required", "alpha_num", "min:6", "confirmed"],
            "role_id" => ["required"]
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);


        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Register succesfull!')->with("success", true);
    }

    public function login() {
        return view("authentication.login");
    }

    public function authenticate(Request $request) {
        $data = $request->validate([
            "name" => "required",
            "password" => "required",
        ]);
        if (Auth::attempt($data, $request['remember'])) {
            $request->session()->regenerate();
            return redirect("/")->with('message', 'Login Succesfull!')->with("success", true);
        }

        return back()->withErrors(["name" => "Invalid Credentials"])->onlyInput('email');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!')->with("success", true);
    }
}
