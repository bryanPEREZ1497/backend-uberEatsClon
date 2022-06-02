<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Enterprises\DestroyEnterpriseRequest;
use App\Http\Requests\V1\Enterprises\StoreEnterpriseRequest;
use App\Http\Requests\V1\Enterprises\UpdateEnterpriseRequest;
use App\Http\Resources\V1\Enterprises\EnterpriseCollection;
use App\Http\Resources\V1\Enterprises\EnterpriseResource;
use App\Models\Enterprise;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:admin|guest|client');
        // $this->middleware('permission:view-enterprises')->only(['index', 'show']);
        // $this->middleware('permission:store-enterprises')->only(['store']);
        // $this->middleware('permission:update-enterprises')->only(['update']);
        // $this->middleware('permission:delete-enterprises')->only(['destroy', 'destroys']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new EnterpriseCollection(Enterprise::get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnterpriseRequest $request)
    {

        $enterprise = new Enterprise();
        $enterprise->address = $request->input('address');
        $enterprise->calification = $request->input('calification');
        $enterprise->country = $request->input('country');
        $enterprise->img_url = $request->input('img_url');
        $enterprise->name = $request->input('name');
        $enterprise->ranking = $request->input('ranking');
        $enterprise->time_close = $request->input('time_close');
        $enterprise->time_open = $request->input('time_open');
        $enterprise->save();

        return response()->json(
            [
                'data' => $enterprise,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'La empresa ha sido creada con exito',
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
    public function show(Enterprise $enterprise)
    {
        return new EnterpriseResource($enterprise);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnterpriseRequest $request, Enterprise $enterprise)
    {
        $enterprise->address = $request->input('address');
        $enterprise->calification = $request->input('calification');
        $enterprise->country = $request->input('country');
        $enterprise->img_url = $request->input('img_url');
        $enterprise->name = $request->input('name');
        $enterprise->ranking = $request->input('ranking');
        $enterprise->time_close = $request->input('time_close');
        $enterprise->time_open = $request->input('time_open');
        $enterprise->save();
        return response()->json([
            'data' => $enterprise,
            'msg' => [
                'summary' => 'Actualizado correctamente',
                'detail' => 'La empresa ha sido actualizada correctamente',
                'code' => '201'
            ]
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enterprise $enterprise)
    {
        $enterprise->delete();
        return response()->json([
            'data' => $enterprise,
            'msg' => [
                'summary' => 'Eliminado correctamente',
                'detail' => 'La empresa ha sido eliminada correctamente',
                'code' => '201'
            ]
        ], 201);
    }

    public function destroys(DestroyEnterpriseRequest $request)
    {
        Enterprise::destroy($request->input('ids'));

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Empresa/s Eliminada/s',
                    'detail' => '',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
