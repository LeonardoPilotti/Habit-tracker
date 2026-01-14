<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
USE App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(RegisterRequest $request){
        $User = User::query()->create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'password'=>$request->input('password'),
        ]);
        Auth::login($User);
        return redirect()->route('habits.index');
    }
}