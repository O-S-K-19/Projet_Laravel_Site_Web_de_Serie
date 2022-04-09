<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //use HasFactory;
    protected $fillable = [
        'genre',
        'slug',
    ];
    public $timestamps = false;


    public function series(){
        return $this->belongsToMany(Serie::class);
    }
}
