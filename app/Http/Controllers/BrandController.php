<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Repositories\BrandMySQLRepository;
use App\Models\Brand;
use App\Repositories\BrandInterface;

class BrandController extends Controller
{
    // protected $BrandInterface;

    // public function __construct(BrandInterface $BrandInterface){
    //     $this->BrandInterface = $BrandInterface;
    // }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = app('App\Repositories\BrandMySQLRepository')->getAll();
        return response()->json($brands);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBrandRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBrandRequest $request)
    {
        
        $brand = app('App\Repositories\BrandMySQLRepository')->create($request->all());
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $brand = app('App\Repositories\BrandMySQLRepository')->getById($brand->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBrandRequest  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBrandRequest $request)
    {
        // dd($request);
        $brand = app('App\Repositories\BrandMySQLRepository')->update($request->id,$request->all());        // $brand->update($request->all());
        // dd($brand);
        // return $brand;
        // $this->BrandInterface->update($request->id, $request->name);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(UpdateBrandRequest $request)
    {   
        $brand= app('App\Repositories\BrandMySQLRepository')->delete($request->id);
    }
}
