<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\HostCategory;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'priority', 'slug', 'user_id','hostCategory_id'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function HostCategory(){
        return $this->belongsTo(HostCategory::class, 'hostCategory_id');
    }


}
