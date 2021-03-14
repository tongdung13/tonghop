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
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function register(Request $request)
    {
        $authenticate = Validator::make($request->all(), [
            'name' => 'required|string|min:6',
            'email' => 'required|email|string|unique:users',
            'password' => 'required|string|min:6|confirmed'
        ]);

        if ($authenticate->fails()) {
            return response()->json($authenticate->errors(), 400);
        }

        $user = User::create(array_merge(
            $authenticate->validated(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'message' => 'user successfull',
            'user' => $user
        ], 201);
    }

    public function login(Request $request)
    {
        $authenticate = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($authenticate)) {
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
        return response()->json(['message' => 'user successfully logged out']);
    }

    public function userProfile()
    {
        return response()->json(Auth::user());
    }

    public function getAuthenticatedUser()
    {
        try {

            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json(['token_expired'], $e->getCode());

        } catch (TokenInvalidException $e) {

            return response()->json(['token_invalid'], $e->getCode());

        } catch (JWTException $e) {

            return response()->json(['token_absent'], $e->getCode());
        }

        return response()->json(compact('user'));
    }
}
