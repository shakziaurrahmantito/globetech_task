<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\adminUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{

    public function registration(Request $req){

        if ($req->isMethod("post")) {
            $valid = Validator::make($req->all(),[
                "name" => "required",
                "email" => "required|email|unique:users",
                "password" => "required"
            ]);

            if ($valid->fails()) {
                return response()->json([
                    "status" => 1,
                    "error" => $valid->errors()
                ]);
            }

            $user = new User();
            $user->name = $req->name;
            $user->email = $req->email;
            $user->password = bcrypt($req->password);
            $user->save();

            if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {

                $user = User::where("email", $req->email)->first();
                $token = $user->createToken($req->email)->accessToken;
                User::where("email", $req->email)->update([
                    "access_token" => $token
                ]);

                return response()->json([
                    "message" => "User successfully registered",
                    "access_token" => $token
                ]);

            }else{
                return response()->json([
                    "message" => "Ops! something went wrong!"
                ]);
            }
        }

    }


    public function login(Request $req){

        if ($req->isMethod("post")) {

            $valid = Validator::make($req->all(),[
                "email" => "required|email|exists:users,email",
                "password" => "required"
            ]);

            if ($valid->fails()) {
                return response()->json([
                    "status" => 1,
                    "error" => $valid->errors()
                ]);
            }

            if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {

                $user = User::where("email", $req->email)->first();

                $token = $user->createToken($req->email)->accessToken;

                User::where("email", $req->email)->update([
                    "access_token" => $token
                ]);

                return response()->json([
                    "message" => "User login successfully",
                    "access_token" => $token
                ], 201);

            }else{
                return response()->json([
                    "message" => "Email or password not match!"
                ], 422);
            }

        }

    }


    public function logout(Request $req){

        if ($req->isMethod("post")) {
            $user = $req->user()->token();
            $user->revoke();
            return response()->json([
                "message" => "User logout successfully"
            ], 200);
        }

    }



    public function oneToOneRelation(){
        $user = User::all();
        return view("oneToone",compact("user"));
    }

    public function oneToManyRelation(){
        $user = User::all();
        return view("oneToMany",compact("user"));
    }

    public function manyToManyRelation(){
        $adminUser = adminUser::all();
        return view("manyTomany",compact("adminUser"));
    }



}
