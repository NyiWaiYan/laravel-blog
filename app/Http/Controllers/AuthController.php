<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Validation\Rule;
use PhpParser\Builder\Function_;

class AuthController extends Controller
{
    
public function register(){
    return view('auth.register');
}



public function store(){

    $formData=request()->validate([

        'name'=>['required'],  
        'email'=>['required','email',Rule::unique('users','email')],
        'username'=>['required','max:255','min:3',Rule::unique('users','username')],
        'password'=>['required','min:1'],
        'meta_title'=>['required'],
        'tax'=>['required'],
        

    ]);

    // $formData['password']=bcrypt($formData['password']);

    // $user=User::create($formData);

    // //login
    // auth()->login($user);
    // return redirect('/')->with('success','welcome Dear,' .$user->name);

}



public function logout()
{
     auth()->logout();
     return redirect('/')->with('success','Visit Us Again');
    
}

 public function login(){
    
    return view('auth.login');

  }


  public function post_login()
  {

    
      //validation
      $formData=request()->validate([
          'email'=>['required','email','max:255',Rule::exists('users', 'email')],
          'password'=>['required','min:8','max:255']
      ], [
          'email.required'=>'We need your email address.',
          'password.min'=>'Password should be more than 8 characters.'
         ]);
      



         //if user credentials correct -> redirect home
         if (auth()->attempt($formData)) {
            if(auth()->user()->is_admin){
                return redirect('/admin/blogs');
            }else{
                return redirect('/')->with('success', 'Welcome back');
            }
        } else {
            //if user credentials fail -> redirect back to form with error
            return redirect()->back()->withErrors([
                'email'=>'User Credentials Wrong'
            ]);
        }
    }

}
