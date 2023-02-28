<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['logo','favicon', 'mobile', 'address', 'email','facebook', 'twitter', 'instagram',
    'footer_img_one', 'footer_img_two', 'powered', 'about',	'use_link'];
}
