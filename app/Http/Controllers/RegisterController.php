<?php

namespace App\Http\Controllers;

use App\Models\UserDetailsModel;
use App\Models\UsersModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function create(Request $request){
        $userId = $request->input('userid');
        $name = $request->input('name');
        $number_phone = $request->input('number_phone');
        $address = $request->input('address');
        $password = Hash::make($request->input('password'));

        try{
            $checkUser = UsersModel::where('userid',$userId)->count();
            if($checkUser <= 0){
                UsersModel::create([
                    'userid'=>$userId,
                    'password'=>$password,
                    'role'=>"user"
                ]);
                UserDetailsModel::create([
                    'owner_userid'=>$userId,
                    'name'=>$name,
                    'number_phone'=>$number_phone,
                    'address'=>$address
                ]);
                echo "Success";
            }else{
                echo "Account has already created";
            }
        }catch(Exception $e){
            dd($e);
        }
    }
}
