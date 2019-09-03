<?php

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class Test extends Controller
{
    //注册展示方法
    public function register() {
        return view('test.register');
    }
    //接受数据
    public function registerDo(Request $request) {
        $this->validate($request,[
            'username'=>'required|unique:users',
            'password'=>'required',
            'phone'=>'required',
        ]);
        $model = new Users();
//        $model->username = $request['username'];
//        $model->ids = rand(11111111,99999999);
//        $model->password = md5($request['password']);
//        $model->phone = $request['phone'];
        $res = $model->save();
        die;
        if(1) {
            $this->login();
        }else {
            return '失败';
        }
//        return $request;
    }
    //登录
    public function login() {
        return view('test.login');
    }
    //处理登录信息
    public function loginDo(Request $request) {
        $this->validate($request,[
            'username'=>'required',
            'password'=>'required',
        ]);
//        $model = new Users();
//        $res = $model->where('username',$request['username'])
//            ->where('password',$request['password'])
//            ->first();
        if(1) {
            return view('test.mian');
        }else {
            return '密码或账户错误';
        }
    }
}
