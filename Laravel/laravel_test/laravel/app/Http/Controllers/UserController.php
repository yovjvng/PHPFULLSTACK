<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login() {
        return view('login');
    }

    public function loginpost(Request $req) {
        Log::debug("Login Start", $req->only('email', 'password'));
        // 유효성 체크(제일 먼저 해야함)
        $validate = Validator::make($req->only('email', 'password'), [
            'email' => 'required|email|max:30'
            ,'password' => 'required|max:30|min:3'
        ]);
        Log::debug("Validator end");

        if($validate->fails()) {
            Log::debug("Validator fails Start");

            return redirect()->back()->withErrors($validate);
        }

        // 유저 정보 습득
        $user = DB::select('select id, email, password from users where email = ?', [
            $req->email
        ]);
        Log::debug("Select user", [$user[0]]);
        // if(!$user || !Hash::check($req->password, $user[0]->password)) {
        if(!$user || $req->password !== $user[0]->password) {
            return redirect()->back()->withErrors(["아이디와 비밀번호를 확인해 주세요",'00']);
        }

        // 유저인증 작업
        Auth::loginUsingId($user[0]->id);
        if(!Auth::check()) {
            // session($user[0]->id);
            Log::debug("유저인증 NG", [session()->all()]);
            return redirect()->back()->withErrors(["인증처리 에러"]);
        } else {
            Log::debug("유저인증 OK", [session()->all()]);
            return redirect('/');
        }
    }
}

