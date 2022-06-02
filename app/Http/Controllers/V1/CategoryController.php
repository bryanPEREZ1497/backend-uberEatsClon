<?php

namespace App\Http\Controllers\V1;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Categories\CategoryResource;
use App\Http\Resources\V1\Categories\CategoryCollection;
use App\Http\Requests\V1\Categories\StoreCategoryRequest;
use App\Http\Requests\V1\Categories\UpdateCategoryRequest;
use App\Http\Requests\V1\Categories\DestroyCategoryRequest;


class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin|client|delivery');
        $this->middleware('permission:view-categories')->only(['index', 'show']);
        $this->middleware('permission:store-categories')->only(['store']);
        $this->middleware('permission:update-categories')->only(['update']);
        $this->middleware('permission:delete-categories')->only(['destroy', 'destroys']);
    }
    public function index()
    {
        $categories = Category::get();
        return new CategoryCollection($categories);
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = new Category;
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->img_url = $request->input('imgUrl');
        $category->save();

        return response()->json(
            [
                'data' => $category,
                'msg' => [
                    'summary' => 'Creado correctamente',
                    'detail' => 'La categoria se creo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function show(Category $category)
    {
        return new CategoryResource($category);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->img_url = $request->input('imgUrl');
        $category->save();

        return response()->json(
            [
                'data' => $category,
                'msg' => [
                    'summary' => 'Actulizado correctamente',
                    'detail' => 'La categoria se actualizo correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(
            [
                'data' => $category,
                'msg' => [
                    'summary' => 'Eliminado correctamente',
                    'detail' => 'La categoria fue eliminado correctamente',
                    'code' => '201'
                ]
            ],
            201
        );
    }

    public function destroys(DestroyCategoryRequest $request)
    {
        Category::destroy($request->input('ids'));

        return response()->json(
            [
                'data' => null,
                'msg' => [
                    'summary' => 'Categoria/s Eliminado/s',
                    'detail' => '',
                    'code' => '201'
                ]
            ],
            201
        );
    }
}
