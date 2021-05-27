<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function signup(Request $request)
    {
        // die('hard');
        $this->validate($request, [
            'username'  => 'required|unique:users',
            'email'     => 'required|unique:users',
            'password'  => 'required',
        ]);

        return User::create([
            'username'  => $request->json('username'),
            'email'     => $request->json('email'),
            'password'  => bcrypt($request->json('password')),
        ]);
    }
    public function signin(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required', 
            'password'  => 'required',
        ]);

        $credentials = request(['username', 'password']);

        if (! $token = auth($guard = "api")->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

    public function me()
    {
        return response()->json(auth($guard = "api")->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */


    public function logout()
    {
        auth($guard = "api")->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth($guard = "api")->refresh());
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth($guard = "api")->factory()->getTTL() * 60
        ]);
    }
}
