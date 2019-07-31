<?php

namespace App\Http\Controllers;
use App\Order;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Order $order)
    {
        return $order->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus($id, Request $request,Order $order)
    {     
        $updatedata = $order::find($id);
        $updatedata->status = $request->status?$request->status : $updatedata->status;
        $update->save();
        
        return response()->json(['status'=>200,'note'=>'status order updated','data'=>$update]);
    }
}
