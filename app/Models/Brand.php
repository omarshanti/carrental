<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'tblbrands';
    protected $fillable = [
        'BrandName',
        'brand_ar'
    ];

    public function vehciles() {
        return $this->hasMany(Vechicle::class,'VehiclesBrand','id');
    }
}
