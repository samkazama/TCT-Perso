<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function register()
    {
    	return view('register');
    }

    public function store()
    {
    	$this->validate(request(),[
    		'name' => 'required |unique:users,name',
    		'email' => 'required | email |unique:users,email',
    		'password' => 'required |confirmed',

    	]);

    	$user = User::create(['name' => request('name'),'email' => request('email'), 'password' => bcrypt(request('password'))]);

    	\Auth::login($user);

    	return redirect('/employes');
    }

    public function send()
    {
    	if (! auth()->attempt(request(['name','password']))){
    	return redirect('/');	
    	}
    	
    	
    	return redirect('/employes');
    }

    public function logout()
    {
    	auth()->logout();
    	return redirect ('/');
    }
}
