<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    //
    public function index()
    {
        # code...
        $data = [
            'title'=>"Login Page"
        ];
        return view('Login/login',$data);
    }
    public function perform(Request $request)
    {
        # code...
        $userId = $request->input('userid');
        $password = $request->input('password');
        $checkUser = UsersModel::where('userid',$userId)->first();
        if($checkUser){
            if(Hash::check($password, $checkUser->password)):
                return redirect()->to('home');
            else:
                return view('Login/login');
            endif;
        }
    }
}
