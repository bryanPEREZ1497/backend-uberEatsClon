<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client');
        $this->middleware('permission:view-order-details')->only(['index', 'show']);
        $this->middleware('permission:store-order-details')->only(['store']);
        $this->middleware('permission:update-order-details')->only(['update']);
        $this->middleware('permission:delete-order-details')->only(['destroy', 'destroys']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Order $order)
    {

        $ordersDetails = $order->products()->get();

        return response()->json(
            [
                'data' => $ordersDetails,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La cosulta de pedidos, detalle ha sido correcta',
                    'code' => '200'
                ]
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {

        $resp = $order->products()->attach($request['idProduct']);


        return response()->json(
            [
                'data' => $resp,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'La creación de pedidos, detalle ha sido correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($order, Product $product)
    {
        $order = Order::find($order);
        $order_detail = [];
        foreach ($order->products as $product) {
            array_push($order_detail, $product->pivot);
        }

        return response()->json(
            [
                'data' => $order_detail,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta  de pedidos, detalle ha sido correcta',
                    'code' => '200'
                ]
            ],
            200
        );
    }
}
