<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    public $fillable=['title'];

    public function users (){
        return $this->hasMany(User::class);
    }
    public static function groupArray(){
        $arr=[];
        $groups=Group::all();
        foreach($groups as $group){
            $arr[$group->id]=$group->title;
        }
        return $arr;
    }
}