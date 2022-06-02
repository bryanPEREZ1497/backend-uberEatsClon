<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Enterprises\DestroyEnterpriseRequest;
use App\Http\Requests\V1\EnterprisesProducts\DestroyEnterpriseProductRequest;
use App\Models\Enterprise;
use App\Models\Product;
use Illuminate\Http\Request;

class EnterpriseProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client|delivery');
        $this->middleware('permission:view-products|view-enterprises')->only(['index', 'show']);
        $this->middleware('permission:store-products|view-enterprises')->only(['store']);
        $this->middleware('permission:update-products|view-enterprises')->only(['update']);
        $this->middleware('permission:delete-products|view-enterprises')->only(['destroy', 'destroys']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Enterprise $enterprise)
    {
        $products = $enterprise->products()->where('enterprise_id', $enterprise->id)->get();
        return response()->json(
            [
                'data' => $products,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta de empresas fue correcta',
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
    public function store(Enterprise $enterprise, Request $request)
    {
        $product = new Product();
        $enterprise = $enterprise->products()->where('enterprise_id', $enterprise->id)->get();
        $product->enterprise()->associate($enterprise);

        $product->enterprise_id = $request->input('enterprise_id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->img_url = $request->input('imgUrl');
        $product->like_counter = $request->input('likeCounter');
        $product->save();

        return response()->json(
            [
                'data' => $product,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'nuevo  producto creado',
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
    public function show(Enterprise $enterprise, Product  $product)
    {
        $products = $enterprise->products()->where('enterprise_id', $enterprise->id)->get();
        $product = $product->where('id', $product->id)->get();
        return response()->json(
            [
                'data' => $product,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'la consulta del author fue correcta',
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
    public function update(Enterprise $enterprise, Request $request, $product)
    {
        $product = Product::find($product);
        $enterprise = $enterprise->products()->where('enterprise_id', $enterprise->id)->get();
        $product->enterprise()->associate($enterprise);

        $product->enterprise_id = $request->input('enterprise_id');
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->img_url = $request->input('imgUrl');
        $product->like_counter = $request->input('like_counter');
        $product->save();

        return response()->json(
            [
                'data' => $product,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'nuevo  producto actualizado',
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
    public function destroy(Enterprise $enterprise,  Product $product)
    {
        $products = $enterprise->products()->where('enterprise_id', $enterprise->id)->get();
        $product = $product->where('id', $product->id)->delete();

        return response()->json(
            [
                'data' => $product,
                'msg' => [
                    'sumary' => 'consulta correcta',
                    'detail' => 'Elimando de productos por empresa fue correcta',
                    'code' => '201'
                ]
            ],
            201
        );
    }


    public function destroys($request)
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
