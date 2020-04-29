<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class TokensController extends Controller
{
    public function login(Request $request)
    {
        $credentials = request(['email', 'password']);
        $v = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if ($v->fails())
        {
            return response()->json([
                'success' => false,
                'mensaje' => 'Validacion incorrecta',
                'errors' => $v->errors()
            ]);
        }
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);

    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',           
            'usuario' => auth()->user()
        ]);
    }
}
