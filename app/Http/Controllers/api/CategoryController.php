<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\api\CategoryInterface;
use App\Http\Resources\CategoryResource;


class CategoryController extends Controller
{
    private $CategoryInterface;
    public function __construct(CategoryInterface $CategoryInterface){
        $this->CategoryInterface = $CategoryInterface;
    }

    public function all()
    {
        $categories=$this->CategoryInterface->all();
        // return response()->json(['data'=>$categories,'message'=>200]);
        // return new categoryresource($categories);
        // dd($categories);
        return categoryresource::collection($categories);
    }

    public function getcategorybyid($id){
    $category=$this->CategoryInterface->getcategorybyid($id);
    // dd($category);
    return new categoryresource($category);
    // dd($category);
    // return categoryresource::collection($category);

    }
}
