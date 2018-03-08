<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthCR extends Controller
{
  public function login(Request $req){

    $validator = Validator::make($req->all(), [
      'email' => 'string|email|required',
      'password' => 'string|required'
    ]);

    if($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

    if( Auth::attempt([
      'email' => request('email'),
      'password' => request('password')
      ]) ) return redirect('/');

      else return redirect()->back()->withErrors(
        ['login' => 'These credentials don\'t match ours.']
      );
    }

    public function register(Request $req) {

      $validator = Validator::make($req->all(), [
        'email' => 'string|email|unique:users,email|required',
        'password' => 'string|required'
      ]);

      if($validator->fails()) return redirect()->back()->withErrors($validator)->withInput();

      $user = new User;
      $user->email = request('email');
      $user->password = bcrypt(request('password'));
      $user->save();

      if( Auth::attempt([
        'email' => request('email'),
        'password' => request('password')
        ]) ) return redirect('/');

        else return redirect()->back()->withErrors(
          ['register' => 'Something went wrong.']
        );

        return redirect('/');

      }

      public function logout(){
        Auth::logout();
        return redirect('/');
      }

    }
