<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];
    use HasFactory;




    public function carmodel(){
        return $this->hasMany(CarModel::class, 'brand_id');
    }
}
