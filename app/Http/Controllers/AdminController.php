<?php

namespace App\Http\Controllers;
use App\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(Request $request,Admin $admin)
    {     
        $update = Admin::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>bcrypt($request->password),
            "no_telepon"=>$request->no_telepon
        ]);

        
        return response()->json(['status'=>200,'note'=>'data berhasil dibuat','data'=>$update]);
    }
}
