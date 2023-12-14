<?php

namespace App\Repositories;
use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface{

    public function all(){
        return Product::all();
    }

    public function store(){
        $product = new Product;
        $product->name = request()->name;
        $product->category_id = request()->category_id;
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
