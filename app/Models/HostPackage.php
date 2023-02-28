<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostPackage extends Model
{
    use HasFactory;


    protected $fillable = ['title','slug', 'price', 'priority', 'description', 'icon_class', 	'opportunityOne','opportunityTwo', 'opportunityThree', 'opportunityFour', 'opportunityFive', 'opportunitySix', 'opportunitySeven', 'opportunityEight', 'opportunityNine', 'opportunityTen', 'opportunityEleven', 'opportunityTwelve', 'hostCategory_id', 'plan_id', 'duration_id','user_id' ];




    // All relationship
     public function user()
     {
         return $this->belongsTo(User::class);
     }

     public function plan()
     {
         return $this->belongsTo(Plan::class, 'plan_id');
     }

     public function hostCategory()
     {
         return $this->belongsTo(HostCategory::class, 'hostCategory_id');
     }

     public function duration()
     {
         return $this->belongsTo(Duration::class, 'duration_id');
     }

}
