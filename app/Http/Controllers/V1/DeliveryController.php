<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Deliveries\DestroyDeliveryRequest;
use App\Http\Requests\V1\Deliveries\StoreDeliveryRequest;
use App\Http\Requests\V1\Deliveries\UpdateDeliveryRequest;
use App\Http\Resources\V1\Deliveries\DeliveryCollection;
use App\Http\Resources\V1\Deliveries\DeliveryResource;
use App\Models\Delivery;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client|delivery');
        // $this->middleware('permission:view-deliveries')->only(['index', 'show']);
        // $this->middleware('permission:store-deliveries')->only(['store']);
        // $this->middleware('permission:update-deliveries')->only(['update']);
        // $this->middleware('permission:delete-deliveries')->only(['destroy', 'destroys']);
    }
    public function index()
    {
        $deliveries = DB::select('select *  from app.deliveries');

        return $deliveries;
    }

    public function store(StoreDeliveryRequest $request)
    {
        $delivery = new Delivery();
        $delivery->user()->associate($request->user_id);
        $delivery->calification = $request->input('calification');
        $delivery->description = $request->input('description');
        $delivery->placa = $request->input('placa');
        $delivery->vehicle = $request->input('vehicle');
        $delivery->save();
        return (new DeliveryResource($delivery))->additional(
            [
                'msg' => [
                    'summary' => 'Repartidor creado exitosamente',
                    'detail' => 'Se creo correctamente el repartidor',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function show(Delivery $delivery)
    {
        return (new DeliveryResource($delivery))->additional(
            [
                'msg' => [
                    'summary' => 'Consulta exitosa',
                    'detail' => 'El repartidor se consulto correctamente',
                    'code' => '200'
                ]
            ],
            200
        );
    }

    public function update(UpdateDeliveryRequest $request, Delivery $delivery)
    {
        $delivery->calification = $request->input('calification');
        $delivery->description = $request->input('description');
        $delivery->placa = $request->input('placa');
        $delivery->vehicle = $request->input('vehicle');
        $delivery->save();
        return (new DeliveryResource($delivery))->additional(
            [
                'msg' => [
                    'summary' => 'Repartidor actualizado exitosamente',
                    'detail' => 'Se actualizo el repartidor',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return (new DeliveryResource($delivery))->additional(
            [
                'msg' => [
                    'summary' => 'Elimado correctamente',
                    'detail' => 'El repartidor se elimino correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
    public function destroys(DestroyDeliveryRequest $request)
    {
        Delivery::destroy($request->input('ids'));
        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Repartidor/s Eliminado/s',
                    'detail' => '',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
