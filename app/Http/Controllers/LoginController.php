<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class LoginController extends Controller
{
    //use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    //ログイン画面遷移
    public function charge()
    {
        return view('charge.login');
    }
    public function employee()
    {
        return view('employee.login');
    }

    //認証
    /*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    public function getlogin()
    {
        return view('employee.confirm');
    }

    public function postlogin()
    {
       // return view('employee.login');
    }

    public function getlogout()
    {
        //return view('employee.login');
    }

 

}
