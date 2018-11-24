<?php

namespace App\Http\Controllers;

use App\User;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function update(Request $request){

        $id=Auth::user()->id;
        $user = User::find($id);
        //dd($request->all());
        //exit();
        //var_dump();
        //exit();
        if(Auth::attempt(array('email'=>Auth::user()->email,'password'=>$request->input('password'))))
        {

        $this->validate($request,[
            'name' => 'required|string|max:191',
            'surname' => 'required|string|max:191',
            'email' => ($request->input('email')==Auth::user()->email ) ? 'required':'required|unique:users|email|string'
        ]);

        $date = $request->input('year')."-".$request->input('month')."-".$request->input('day');
       $user->name = $request->input('name');
       $user->surname = $request->input('surname');
       $user->email = $request->input('email');
       $user->date_of_birth = $date;
       $user->save();
       return redirect()->route('settings');
    }
    else{
        return redirect()->back();
    }
    }
}
