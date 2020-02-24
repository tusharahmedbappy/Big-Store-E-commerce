<?php

namespace App\Http\Controllers;

use App\Model\adminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminUserController extends Controller
{
    public  function  register(Request $request)
    {
        $validate = $request->validate(
            [
                'username' => 'required ||min:5',
                'email' => 'required ||email',
                'password' => 'required ||min:6'
            ]
        );

        if ($validate){
           $create =  adminUser::create($request->all());
           if ($create){
               Session::put('username',$request->email);
               return redirect('/admin');
           }
        }
    }


    public  function  login(Request $request)
    {
        $validate = $request->validate(
            [
                'email' => 'required',
                'password' => 'required '
            ]
        );

        if ($validate){
            $find =  adminUser::where('email',$request->email)->where('password',$request->password)->first();
            if ($find){
                Session::put('username',$request->email);
                return redirect('/admin');
            }else{
                return back()->with('incorrect','Email and password are incorrect');
            }
        }
    }



}
