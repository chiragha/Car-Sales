<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarModel;
use App\Models\Brand;

class CarModelController extends Controller
{
    protected $carmodel;
    public function __construct(){
        $this->carmodel = new CarModel();
        
    }

    public function index()
    {
        $carmodel = $this->carmodel->all();
        $brands = Brand::pluck('name','id');
        return view ('carmodel.index' , compact('carmodel', 'brands'));

    }
    public function store(Request $request)
    {
       
        $this->carmodel->create($request->all());
        return redirect()->back();
    }

    public function edit($id)
    {
        $carmodel = CarModel::find($id);
        return view('carmodel.edit',compact('carmodel', 'brands'));
    }

    public function update(Request $request, string $id)
    {
        $carmodels = CarModel::find($id);
        $input = $request->all();
        $carmodels->update($input);
        return redirect('allmodels'); 
    }

    public function destroy(string $id)
    {
        CarModel::destroy($id);
        return redirect('allmodels');  
    }
}
