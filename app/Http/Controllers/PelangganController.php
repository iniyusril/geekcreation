<?php

namespace App\Http\Controllers;
use\App\Pelanggan;

use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Pelanggan $pelanggan)
    {
        return $pelanggan->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Pelanggan $pelanggan)
    {     
        $update = Pelanggan::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "no_telp"=>$request->no_telp,
            "alamat"=>$request->alamat
        ]);

        
        return response()->json(['status'=>200,'note'=>'data berhasil dibuat','data'=>$update]);
    }

}
