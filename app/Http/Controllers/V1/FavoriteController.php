<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client|delivery');
        // $this->middleware('permission:view-favorites')->only(['index', 'show']);
        // $this->middleware('permission:store-favorites')->only(['store']);
        // $this->middleware('permission:update-favorites')->only(['update']);
        // $this->middleware('permission:delete-favorites')->only(['destroy', 'destroys']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        $favorites = $client->products()->get();
        $favorites = DB::select('select * from app.products  as pro 
        inner join app.favorites as fav on pro.id = fav.product_id  where fav.client_id=?', [$client->id]);

        return response()->json(
            [
                'data' => $favorites,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La cosulta de favoritos ha sido correcta',
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
    public function store(Request $request, Client $client)
    {
        $resp = $client->products()->attach($request['idProduct']);

        return response()->json(
            [
                'data' => $resp,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'La creación de favorito ha sido correcta',
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
    public function show($id)
    {
        $favorite = 'Algun favorito';

        return response()->json(
            [
                'data' => $favorite,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta  de favoritos ha sido correcta',
                    'code' => '200'
                ]
            ],
            200
        );
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
        $favorite = 'algun favorito';

        return response()->json(
            [
                'data' => $favorite,
                'msg' => [
                    'summary' => 'Actualización correcta',
                    'detail' => 'La actulización de favoritos ha sido correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client, Product $product)
    {
        $favorite = DB::delete('delete from app.favorites where product_id =? and client_id =?', [$product->id, $client->id]);

        return response()->json(
            [
                'data' => $favorite,
                'msg' => [
                    'summary' => 'Eliminación correcta',
                    'detail' => 'La elminacón de favoritos ha sido correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
