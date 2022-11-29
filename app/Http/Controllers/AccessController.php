<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Access;

class AccessController extends Controller
{
    public function register(Request $request){

        $access = Access::
        create([
            "access_description" => $request->access_description,
            "summary" => $request->summary
        ]);

        return response($access, 201);
    }

    public function fetchAll(Request $request){
        $access = Access::orderBy('id','desc')->get();

        return $access;
    }
}
