<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duration extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'slug'];

    public function hostPackage()
    {
        return $this->hasOne(HostPackage::class);
    }
}
