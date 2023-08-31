<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vechicle extends Model
{
    use HasFactory;

    protected $table = 'tblvehicles';

    protected $fillable = [
        'VehiclesTitle',
        'VehiclesTitle_ar',
        'VehiclesOverview_ar',
        'VehiclesBrand',
        'VehiclesOverview',
        'PricePerDay',
        'FuelType',
        'ModelYear',
        'SeatingCapacity',
        'Vimage1',
        'Vimage2',
        'Vimage3',
        'Vimage4',
        'Vimage5',
        'AirConditioner',
        'PowerDoorLocks',
        'AntiLockBrakingSystem',
        'BrakeAssist',
        'PowerSteering',
        'DriverAirbag',
        'PassengerAirbag',
        'PowerWindows',
        'CDPlayer',
        'CentralLocking',
        'CrashSensor',
        'LeatherSeats',
    ];
    public function Brands()
    {
        return $this->belongsTo(Brand::class, 'VehiclesBrand', 'id');
    }

    public function Books()
    {
        return $this->hasMany(Book::class, 'VehicleId', 'id');
    }
}
