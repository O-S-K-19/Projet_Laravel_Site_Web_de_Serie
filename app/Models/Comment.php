<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['content']; //indiquez les colonnes qui vont etre affectées par les changements
    protected $table = 'comments';
/**
* Get the user that commented the serie.
*/

public function author()
{
return $this->belongsTo(User::class,'author_id');
}

/**
* Get the serie comment.
*/

public function serie()
{
return $this->belongsTo(Serie::class,'serie_id','author_id');
}
}
