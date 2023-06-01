<?php

namespace App\Http\Controllers\Site;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductFormRequest;
use App\Http\Requests\UpdateProductFormRequest;

class ProductController extends Controller
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
        $categories = Category::all();
        
        return view('site.createproduct')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductFormRequest $request)
    {
        $product_data = $request->all();

        $user = User::find(Auth()->User()->id);
        $product = $user->products()->create($product_data);

        return redirect()->route('listProduct');
    }

    public function list()
    {
        $user_id = Auth()->User()->id;
        $products = $this->show($user_id);

        $categories = Category::all();

        return view('site.listproduct', ['products' => $products, 'categories' => $categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show($user_id)
    {
        $products = User::find($user_id)->products;

        return $products;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user_id = Auth()->User()->id;

        $products = $this->show($user_id);

        $categories = Category::all();
        
        return view('site.editproduct', ['categories' => $categories, 'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductFormRequest $request)
    {
        $product = Product::find($request->id);
        
        // dd($product);
        if(!empty($request->name))
        {
            $product->name = $request->name;
        }
        if(!empty($request->price))
        {
            $product->price = $request->price;
        }
        if(!empty($request->category_id))
        {
            $product->category_id = $request->category_id;
        }

        $product->save();

        return redirect()->route('editProduct');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('listProduct');
    }
}
