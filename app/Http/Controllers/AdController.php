<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Industry;
use App\Models\MainCategory;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param MainCategory $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function create(MainCategory $mainCategory, Category $category, Product $product, Industry $industry)
    {
        $mainCategories = $mainCategory->getMainCategories();
        $industries = $industry->getIndustries();
        $categories = $category->getCategories();
        $products = $product->getProducts();

        return view('ad.create', [
            'mainCategories' => $mainCategories,
            'industries' => $industries,
            'categories' =>  $categories,
            'products' => $products
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
