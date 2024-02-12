<?php

namespace App\Http\Controllers;

use App\Models\TaskType;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserTask;
use App\Providers\CreateFakeDatasServiceProvider;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

    public function index(Request $request) {

        $err = $request->get('err');

        if($err == 1) $err = "Email and password wrong!"; 
        else if($err == 2) $err = "No access!"; 

        return view('welcome',['err' => $err]);
    }

    public function createRandomTasksUsers() {
        CreateFakeDatasServiceProvider::createTaskUsers();
    }

    public function login(Request $request) {

        $rules = [
            'email' => 'email',
            'password' => 'required'
        ];

        $feedback = [
            'user.email' => 'Email is mandatory',
            'user.password' => 'Password is mandatory',
        ];

        $request->validate($rules,$feedback);

        $email = $request->get('email');
        $password = $request->get('password');

        $user = new User();
        $user = $user->where('email',$email)
                       ->get()->first();

        if (isset($user->name)) {
            if (Hash::check($password, $user->password)) {


                session(['id_user' => $user->id]);
                session(['id_level' => $user->id_level]);
                session(['level' => UserLevel::where('id',$user->id_level)->first()->level]);
                session(['name' => $user->name]);
                session(['email' => $user->email]);
                
                return redirect()->route('app.home');
            } else {
                return redirect()->route('app.index',[ 'err' => 1 ]);
            }
        } else {
            return redirect()->route('app.index',[ 'err' => 1 ]);
        }
    }

    public function home() {
        return view('home');
    }

    public function logout() {
        $this->forgetAllSessions();
        return redirect()->to('/');
    }

    private function forgetAllSessions() {
        session()->forget('id_user');
        session()->forget('id_level');
        session()->forget('level');
        session()->forget('name');
        session()->forget('email');
    }

}
