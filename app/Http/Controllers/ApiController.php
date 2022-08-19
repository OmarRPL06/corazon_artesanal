<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Api;

class ApiController extends Controller
{
    public function listApi(Request $request) {

        if ( $request->user() != null) {
            $productos = Api::all();
            return $productos;
        }
        return "[]";
    }
}
