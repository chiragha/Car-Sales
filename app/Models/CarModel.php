<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    
   
    

    protected $table = 'models';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'brand_id'
    ];




    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function car(){
        return $this->belongsTo(Car::class, 'model_id');
    }

    use HasFactory;
}
