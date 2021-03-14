<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth:api',['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:6',
            'email' => 'required|email|string|unique',
            'password' => 'require|string|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = User::create(array_merge(
            $validator->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => 'User successfull',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $validator = $request->only('email', 'password');

        try {
            if(! $token = JWTAuth::attempt($validator)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['message' => 'User successfully logged out']);
    }

    public function userProfile()
    {
        return response()->json(Auth::user());
    }

    public function getAuthenticatedUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json([
                    'user not fount'
                ], 400);
            } 
        } catch (TokenExpiredException $e) {
                return response()->json(['token expired'], $e->getCode());
            } catch (TokenInvalidException $e) {
                return response()->json(['token invalid'], $e->getCode());
            } catch (JWTException $e) {
                return response()->json(['token absent'], $e->getCode());
            }
            return response()->json(compact('user'));
    }

}
