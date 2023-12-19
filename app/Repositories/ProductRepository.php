<?php

namespace App\Repositories;
use App\Interfaces\ProductInterface;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use File;

class ProductRepository implements ProductInterface{

    public function all(){
        return Product::all();
    }

    public function store(){
        $product = new Product;
        $product->name = request()->name;
        $product->category_id = request()->category_id;

       $imageName = time().'.'.request()->image->extension();
       request()->image->move(public_path('images'), $imageName);
       $product->image = $imageName;

        $product->price = request()->price;
        $product->description = request()->description;

        $product->save();
    }

    public function findById($id){
        return Product::findOrFail($id);

    }

    public function update($id){
        $product = $this->findById($id);
        $product->name = request()->name;
        $product->update();

    }

    public function destroy($id){
        $product = $this->findById($id);
        $product->delete();

    }



}
