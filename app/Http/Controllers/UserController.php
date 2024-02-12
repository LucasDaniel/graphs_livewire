<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserLevel;

class UserController extends Controller
{
    public function index() {
        $msg = session()->get('msg');
        return view('user', ['users' => User::getUsersByLevelHigherOne(), 'user_level' => UserLevel::getAllLevelIsNotOwner(), 'msg' => $msg]);
    }

    public function store(Request $request) {

        $rules = [
            'id_level' => 'required',
            'email' => 'email',
            'name' => 'required',
            'password' => 'required|confirmed|min:4',
            'password_confirmation' => 'required|min:4'
        ];

        $feedback = [
            'id_level' => 'Level is mandatory', 
            'email' => 'Email is mandatory',
            'name' => 'Name is mandatory',
            'password' => 'Password is mandatory',
            'password.min'=> 'Password is lower than 4',
            'password.confirmed'=> 'Password is not equal',
            'password_confirmation' => 'Retype Password is mandatory',
            'password_confirmation.min'=> 'Retype Password is lower than 4',
        ];

        $request->validate($rules,$feedback);

        if ($request->post('id')) {
            $user = User::find($request->post('id'));
            // Make sure you've got the Page model
            if($user) {
                $user->id_level = $request->post('id_level');
                $user->name = $request->post('name');
                $user->email = $request->post('email');
                $user->password = $request->post('password');
                $user->update();
                return redirect()->to('user')->with([ 'msg' => 2 ]);
            } else {
                return redirect()->to('user');
            }
        } else {
            $user = new User();

            $user->id_level = $request->post('id_level');
            $user->name = $request->post('name');
            $user->email = $request->post('email');
            $user->password = $request->post('password');
            $user->save();

            return redirect()->to('user')->with([ 'msg' => 1 ]);
        }

    }

    public function show($id) {
        $user = User::find($id);
        return view('user',['users' => User::getUsersByLevelHigherOne(), 'user_level' => UserLevel::getAllLevelIsNotOwner(),'user' => $user]);
    }

    public function destroy($id) {
        User::find($id)->delete();
        return redirect()->to('user')->with([ 'msg' => 3 ]);
    }

    
}
