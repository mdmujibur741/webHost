<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = ['logo','favicon', 'mobile', 'address', 'email','facebook', 'twitter', 'instagram',
    'footer_img_one', 'footer_img_two','footer_img_three','footer_img_four', 'powered', 'about',	'use_link',
     'home_feature_title', 'home_feature_description', 'home_package_title', 'home_package_description',
      'home_premium_title', 'home_premium_description', 'home_premium_image' ];
}
?>