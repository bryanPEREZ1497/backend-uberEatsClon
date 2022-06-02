<?php

namespace App\Http\Controllers\V1;

use App\Models\Client;
use App\Models\Order;
use App\Models\DeliveryMan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Orders\OrderCollection;
use App\Http\Requests\V1\Orders\StoreOrderRequest;
use App\Http\Requests\V1\Orders\UpdateOrderRequest;
use App\Http\Requests\V1\Orders\DestroyOrderRequest;
use App\Http\Resources\V1\Orders\OrderResource;
use App\Models\Delivery;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client|delivery');
        // $this->middleware('permission:view-orders')->only(['index', 'show']);
        // $this->middleware('permission:store-orders')->only(['store']);
        // $this->middleware('permission:update-orders')->only(['update']);
        // $this->middleware('permission:delete-orders')->only(['destroy', 'destroys']);
    }
    public function index(Client $client)
    {
        $orders = DB::select('select *  from app.orders  where client_id =?', [$client->id]);

        return new OrderCollection($orders);
    }

    public function store(Request $request)
    {
        $order = DB::insert('insert into app.orders (client_id, delivery_id, calification, delivery_cost, delivery_date, state, payment_method,wait_time,total_price )
                    values (?,?,?,?,?,?,?,?,?)', [
            $request->client_id,
            $request->delivery_id,
            $request->calification,
            $request->delivery_cost,
            $request->delivery_date,
            $request->state,
            $request->payment_method,
            $request->wait_time,
            $request->total_price,
        ]);

        return response()->json(
            [
                'data' => $order,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'El pedido se creo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function show(Order $order)
    {
        return new OrderResource($order);
    }

    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->calification = $request->input('calification');
        $order->delivery_cost = $request->input('deliveryCost');
        $order->delivery_date = $request->input('deliveryDate');
        $order->state = $request->input('state');
        $order->payment_method = $request->input('paymentMethod');
        $order->wait_time = $request->input('waitTime');
        $order->total_price = $request->input('totalPrice');
        $order->save();

        return response()->json(
            [
                'data' => $order,
                'msg' => [
                    'summary' => 'Actulizado correctamente',
                    'detail' => 'El producto se actualizo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function destroy(Client $client, Order $order)
    {
        $order->delete();
        return response()->json(
            [
                'data' => $order,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'El pedido fue eliminado correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function destroys(DestroyOrderRequest $request)
    {
        Order::destroy($request->input('ids'));

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Ordenea/s Eliminado/s',
                    'detail' => '',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
