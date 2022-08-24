<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    public function listApi(Request $request)
    {
        if ($request->user() != null) {
            $productos = Api::all();
            return $productos;
        }
        return '[]';
    }

    public function loginApi(Request $request)
    {
        if (Auth::guard('apiToken')->attempt(['email' => $request->input('u'), 'password' => $request->input('p')])) {
            $token = Str::random(60);
            Auth::guard('apiToken')
                ->user()
                ->forceFill(['api_token' => hash('sha256', $token)])
                ->save();
            return '{"Respuesta":"Usuario aceptado", "cliente":"' . Auth::guard('apiToken')->user() . '", "token":"' . $token . '"}';
        }
        return '{"Respuesta": "Usuario no valido"}';
    }
}
