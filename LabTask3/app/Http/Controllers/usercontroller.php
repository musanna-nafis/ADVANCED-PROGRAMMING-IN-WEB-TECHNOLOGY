<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vuser;
class usercontroller extends Controller
{
    public function login() 
    {
        return view('login');
    }
    public function student() 
    {
        return view('student');
    }
    public function teacher() 
    {
        return view('teacher');
    }
    public function admin() 
    {
        return view('admin');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('login');
    }

    public function loginsubmit(Request $req)
    {
        

        $req->validate(
            [
                'name'=>'required',
                'password'=>'required'
            ],
       );

       $user=vuser::where('name',$req->name)->where('password',$req->password)->first();
       if($user==null)
       {
          $req->session()->flash('error1','No User available');
          return redirect()->route('login');
       }
       else
       {
            if($user->role=="student")
            {
                $req->session()->put('role','student');
                return redirect()->route('student');
            }
            if($user->role=="teacher")
            {
                $req->session()->put('role','teacher');
                return redirect()->route('teacher');
              
            }
            if($user->role=="admin")
            {
                $req->session()->put('role','admin');
                return redirect()->route('admin');
            }
           
       }

    }











}

