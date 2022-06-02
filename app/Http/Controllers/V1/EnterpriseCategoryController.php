<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Enterprise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnterpriseCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client|delivery');
        $this->middleware('permission:view-enterprise-categories')->only(['index', 'show']);
        $this->middleware('permission:store-enterprise-categories')->only(['store']);
        $this->middleware('permission:update-enterprise-categories')->only(['update']);
        $this->middleware('permission:delete-enterprise-categories')->only(['destroy', 'destroys']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Enterprise $enterprise)
    {
        $enterprisesCategories  = $enterprise->categories()->where('enterprise_id', $enterprise->id)->get();
        return response()->json(
            [
                'data' => $enterprisesCategories,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta de empresas y categorias esta correcta',
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
    public function store(Enterprise $enterprise,  Request $request)
    {
        $category = new Category();
        $enterprisesCategories  = $enterprise->categories()->where('enterprise_id', $enterprise->id)->get();
        $category->enterprise()->associate($enterprisesCategories);

        $category->description = $request->input('description');
        $category->name = $request->input('name');
        $category->img_url =  $request->input('img_url');
        $category->save();



        return response()->json(
            [
                'data' => $category,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'La empresas y categorias se creo correctamente',
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
    public function show(Enterprise $enterprise, Category $category)
    {
        $enterprises_categories = $enterprise->categories()->where('enterprise_id', $enterprise->id)->get();
        $category = $category->where('id', $category->id)->get();

        return response()->json(
            [
                'data' => $enterprises_categories,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta de la empresas y categorias esta correcta',
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
    public function update(Enterprise $enterprise,  Request $request, $id, $category)
    {

        $enterprises_categories = Category::find($category);
        $enterprise = $enterprise->categories()->where('enterprise_id', $enterprise->id)->get();
        $category->enterprise()->associate($enterprise);

        return response()->json(
            [
                'data' => $enterprises_categories,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La actualización de la empresas y categorias fue correcta',
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
    public function destroy(Enterprise $enterprise, Category $category)
    {
        $enterprises_categories = $category->where('id', $category->id)->delete();
        return response()->json(
            [
                'data' => $enterprises_categories,
                'msg' => [
                    'summary' => 'Elimininado correctamente',
                    'detail' => 'La empresas y categorias ha sido eliminada correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }
    public function indexReverse(Category $category)
    {
        $categoryEnterprises = $category->enterprises()->where('category_id', $category->id)->get();
        return response()->json(
            [
                'data' => $categoryEnterprises,
                'msg' => [
                    'summary' => 'Consulta correcta',
                    'detail' => 'La consulta de empresas fue correcta',
                    'code' => '200'
                ]
            ],
            200
        );
    }
}
