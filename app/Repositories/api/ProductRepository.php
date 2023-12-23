<?php

namespace App\Repositories\api;
use App\Interfaces\api\ProductInterface;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductRepository implements ProductInterface{

    public function all(){
    return Product::all();

    }

    public function getproductbyid($id){
        return Product::find($id);
    }



}
