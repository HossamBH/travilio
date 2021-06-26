<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'rate', 'pricePerDay', 'roomAmenities', 'discount', 'provider_id', 'city_id'];

    ##################### Begin Relations ###################
    public function city(){
        return $this->belongsTo(Hotel::class);
    }

    public function provider(){
        return $this->belongsTo(Hotel::class);
    }
    ##################### End Relations ###################

}
