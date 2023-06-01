<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryFormRequest;
use App\Http\Requests\UpdateCategoryFormRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('site.createcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryFormRequest $request)
    {
        $category_data = $request->all();

        $category = Category::create($category_data);

        return redirect()->route('listCategory');
    }

    public function list()
    {
        $categories = Category::all();
        return view('site.listcategory', ['categories' => $categories]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $categories = Category::all();
        
        return view('site.editcategory', ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryFormRequest $request)
    {
        $category = Category::find($request->id);
        
        $category->name = $request->name;

        $category->save();

        return redirect()->route('editCategory');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::destroy($id);
        return redirect()->route('listCategory');
    }
}
