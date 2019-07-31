<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetails;
use App\Order;
use App\Produk;
use App\Pelanggan;
use DB;
class DetailOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(OrderDetails $or)
    {
        return $or->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,OrderDetails $or)
    {
        $data = new Pelanggan();
        $data->nama = $request->nama;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->alamat = $request->alamat;
        $data->save();
        $id_pelanggan = $data->id;
        $data_order = new Order();
        $data_order->id_pelanggan = $id_pelanggan;
        $data_order->status = 0;
        $data_order->id_admins = $request->id_admins;
        $data->save();
        $id_order = $data->id;
        foreach($request->produks as $produk){
            $data_produk = Produk::where('id',$request->id_toko)->first();
            $data_order_detail = new OrderDetails();
            $data_order_detail->id_order = $id_order;
            $data_order_detail->id_produk = $produk['id_produk'];
            $data_order_detail->qty = $produk['qty'];
            $data_order_detail->save();
            //produk --
            var_dump($data_produk->stok);
            // $data_produk->stok = $data_produk->stok - $produk['qty'];
            // $data_produk->save();
        }
       // return response()->json(['status'=>200,'note'=>'data berhasil dibuat','data'=>$update]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
