<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Interfaces\CategoryInterface;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $CategoryInterface;
    public function __construct(CategoryInterface $CategoryInterface){
        $this->CategoryInterface = $CategoryInterface;
    }

    public function index()
    {
        $category = Category::all();
        return view ('admin.categories.index' , compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view ('admin.categories.create' , compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->CategoryInterface->store();
        return redirect ('category');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
