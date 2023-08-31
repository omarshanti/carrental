<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'tblbooking';
    protected $fillable = [
        'userEmail',
        'VehicleId',
        'FromDate',
        'ToDate',
        'message',
        'Status',
    ];
    public function cars() {
        return $this->belongsTo(Vechicle::class,'VehicleId','id');
    }
    public function user() {
        return $this->belongsTo(User::class,'userEmail','email');
    }
}
