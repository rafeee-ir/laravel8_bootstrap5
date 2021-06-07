<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Rfc4122\Validator;

class UserController extends Controller
{
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $token = auth()->user()->createToken('NewToken')->accessToken;
            return response()->json([
                'token' => $token,
                'code' => 200
            ]);
        }else{
            return response()->json(['error'=>'Unauthorized']);
        }
    }

//    public function register(Request $request)
//    {
//        $input = $request->all();
//        $validator = Validator::make($input, [
//            'name' => 'required',
//            'email' => 'required:email|unique:users',
//            'password' => 'required',
//            'c_password' => 'required|same:password'
//        ]);
//
//        // if there is some error's, show  to user
//        if ($validator->fails()) {
//            return response()->json([$validator->errors()->merge(['code'=>500])],500);
//        }
//
//        $user = User::create($input);
//        $token = $user->createToken('NewToken')->accessToken;
//        return response()->json([
//            'token' => $token,
//        ], 201);
//    }
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;

        return $this->sendResponse($success, 'User register successfully.');
    }
}
