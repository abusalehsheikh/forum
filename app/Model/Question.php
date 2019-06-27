<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug'; // TODO: Change the autogenerated stub
    }

    public function getPathAttribute(){
        return asset("api/question/$this->slug");
    }

    public function user(){
         return $this->belongsTo(User::class);
     }

     public function category(){
         return $this->belongsTo(Category::class);
     }

     public function replies(){
         return $this->hasMany(Reply::class);
     }
}