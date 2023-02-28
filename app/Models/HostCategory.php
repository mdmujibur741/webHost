<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HostCategory extends Model
{
    use HasFactory;


    protected $fillable =['name','slug','description', 'image','parent_id','priority', 'user_id'];



    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function hostPackage()
    {
        return $this->hasOne(HostPackage::class);
    }




}
