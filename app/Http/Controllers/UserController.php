<?php

namespace App\Http\Controllers;

use App\User;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function update(array $data){
        $data['date_of_birth'] = $data['year'].'-'.$data['month'].'-'.$data['day'];
       return User::where('id',Auth::user()->id)->update(
            ['name' => $data['name'] ],
            ['surname' => $data['surname'] ],
            ['email' => $data['email'] ],
            ['password' => Hash::make($data['newpassword']) ],
            ['avatar' => $data['image']]
        );
    }
}
