<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(Request $request){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $user = DB::table("tbl_user")
            ->where('email',"=", $request['email'])
            ->where('password', "=", $request['password'])
            ->get()->first();
        if(isset($user->email) && $user->email != ""){

        }
        else{
            return "fail";
        }
    }
    public function register(Request $request){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        $user = DB::table("tbl_user")
            ->where('email',"=", $request['email'])
            ->get()->first();
        if(isset($user->email) && $user->email != ""){
            return "fail";
        }
        else{
            DB::table("tbl_user")
                ->insert([
                    "email" => $request["email"],
                    "name" => $request["name"],
                    "password" => $request["password"],
                    "ip" => $ip,
                ]);
            return "success";
        }
    }

    public function authenticate(Request $request){
        print_r($request);
        return $request;
    }
}
