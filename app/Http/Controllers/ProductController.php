<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use App\Interfaces\ProductInterface;
use App\Interfaces\CategoryInterface;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $ProductInterface;
    public function __construct(ProductInterface $ProductInterface){
        $this->ProductInterface = $ProductInterface;
    }

    public function index()
    {
        $categories = Category::all();
        $product = Product::all();
        return view ('admin.products.index' , compact('product','categories')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view ('admin.products.create' , compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->ProductInterface->store();
        return redirect ('products');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = $this->ProductInterface->findById($id);
        return view ('admin.products.edit' , compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->ProductInterface->update($id);
        return redirect ('products');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->ProductInterface->destroy($id);
        return redirect ('products');
    }
}
