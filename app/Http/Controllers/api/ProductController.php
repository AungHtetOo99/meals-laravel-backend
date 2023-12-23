<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\api\ProductInterface;
use App\Http\Resources\ProductResource;


class ProductController extends Controller
{
    private $ProductInterface;
    public function __construct(ProductInterface $ProductInterface){
        $this->ProductInterface = $ProductInterface;
    }

    public function all()
    {
        $products=$this->ProductInterface->all();
        // return response()->json(['data'=>$categories,'message'=>200]);
        // return new categoryresource($categories);
        // dd($categories);
        return productresource::collection($products);
    }

    public function getproductbyid($id){
    $product=$this->ProductInterface->getproductbyid($id);
    // dd($category);
    return new productresource($product);
    // dd($category);
    // return categoryresource::collection($category);

    }
}
