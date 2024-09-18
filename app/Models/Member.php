<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{ 
    protected $table = 'members';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'password',
        'active',
        'role',
        'join_date',
    ];
   
    public function car(){
        return $this->belongsTo(Car::class, 'member_id');
    }

    public function carmodel(){
        return $this->belongsTo(CarModel::class, 'model_id');
    }

    use HasFactory;

}
