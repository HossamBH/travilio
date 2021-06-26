<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    ##################### Begin Relations ###################
    public function hotels(){
        return $this->hasMany(Hotel::class);
    }
    ##################### End Relations ###################
}
