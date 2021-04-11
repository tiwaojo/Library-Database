<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    function LogIn()
    {
        return view('signin');
    }
    function Register(){
        return view('signup');
    }
    function Create( Request $request)
    {
        # code...
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12'
        ]);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $data=$request->all();
        $query=$user->save();

        if($query){
            return back()->with('success','you have been registered');
        }else{
            return back()->with('fail','Something went wrong');
        }
    }
    function Authenticate( Request $request)
    {
        # code...
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);
        $user=User::where('email','=',$request->email)->first();
        if ($user){
            if (Hash::check($request->password, $user->password)){
                $request->session()->put('loggedUser',$user->id);
                return redirect('/');
                // return back()->with('success','acct found');
            }
            else{
                return back()->with('fail','wrong pass');
            }
        }
        else{
            return back()->with('fail','no acct assoc with email');
        }
    }
    function index(){
        return view('');
    }
}
