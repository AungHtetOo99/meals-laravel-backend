<?php

namespace App\Repositories\api;
use App\Interfaces\api\CategoryInterface;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryInterface{

    public function all(){
    return Category::all();

    }

    public function getcategorybyid($id){
        return Category::findOrFail($id);
    }



}
