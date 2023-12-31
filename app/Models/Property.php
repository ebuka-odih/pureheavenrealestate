<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class, 'properties_id');
    }



    public function invest()
    {
        return $this->hasMany(Invest::class);
    }
}
