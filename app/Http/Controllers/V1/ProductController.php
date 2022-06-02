<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Products\DestroyProductRequest;
use App\Http\Requests\V1\Products\StoreProductRequest;
use App\Http\Resources\V1\Products\ProductCollection;
use App\Models\Enterprise;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client');
        $this->middleware('permission:view-products')->only(['index', 'show']);
        $this->middleware('permission:store-products')->only(['store']);
        $this->middleware('permission:update-products')->only(['update']);
        $this->middleware('permission:delete-products')->only(['destroy', 'destroys']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ProductCollection(Product::paginate());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        return response()->json(
            [
                'data' => $product,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta del producto esta correcta',
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
    public function update(Request $request, $product)
    {
        $product = Product::find($product);

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
                    'summary' => 'Actulizado correctamente',
                    'detail' => 'El producto se actualizo correctamente',
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
    public function destroy(Enterprise $enterprise, Product $product)
    {
        $products = $enterprise->products()->where('enterprise_id', $enterprise->id)->get();
        $product = Product::find($product->id);
        $product->delete();

        return response()->json(
            [
                'data' => $product,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'El producto fue eliminado correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
    public function destroys(DestroyProductRequest $request)
    {
        Product::destroy($request->input('ids'));

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Producto/s Eliminado/s',
                    'detail' => '',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
