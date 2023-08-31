<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;
    protected $table = 'tbltestimonial';
    protected $fillable = [
        'Testimonial',
        'UserEmail',
        'status',
        'test_ar',
    ];

    public function user() {
        return $this->belongsTo(User::class,'UserEmail','email');
    }
}
