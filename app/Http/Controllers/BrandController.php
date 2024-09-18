<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    
    protected $brand;

    public function __construct(){
        $this->brand = new Brand();
        
    }

    public function index()
    {
      
       $brands = brand::all();
       return view ('brand.index')->with('brands',$brands);
    }
    
    public function store(Request $request)
    {
       
        $this->brand->create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brand.edit',compact('brand'));
    }

    public function update(Request $request, string $id)
    {
        $brands = Brand::find($id);
        $input = $request->all();
        $brands->update($input);
        return redirect('allbrands'); 
    }

    public function destroy(string $id)
    {
        Brand::destroy($id);
        return redirect('allbrands');  
    }
}
