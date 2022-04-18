<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Token;

class UserController extends Controller
{
    public function test(){
        $users = User::all();
        return view('welcome');
    }

  

    public function signupPost(Request $req){
        $user = new User();
        $user->username = $req->username;
        $user->password = md5($req->password);
        $user->role = $req->role;
        $user->save();
        return "signup successful";
        //return redirect()->route('signin');
    }

   

    public function signinPost(Request $req){
        $user = User::where('username',$req->username)->where('password',md5($req->password))->first();
        if($user){
           /* if($user->role=='student'){
                $req->session()->put('role','student');
                $req->session()->put('username',$user->username);
                $req->session()->put('id',$user->id);
                //return redirect()->route('student.dashboard');
                return 'hello';
            }
            else if($user->role=="instructor"){
                $req->session()->put('role','instructor');
                $req->session()->put('username',$user->username);
                $req->session()->put('id',$user->id);
                return redirect()->route('instructor.dashboard');
            }
            else{
                return redirect()->route('signin');
            }*/
            

            $tokengen= bin2hex(random_bytes(40));
            $token = new Token();
            $token->value = $tokengen;
            $token->user_id=$user->id; 
            $token->save();
            return $tokengen;

        }
     return response()->json(["msg"=>"INCORECT USERNE OR PASSWOD"],401);
    }
}
