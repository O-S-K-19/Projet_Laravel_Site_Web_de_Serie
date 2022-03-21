<?php

namespace App\Models;

use App\Models\User;
use App\Models\Serie;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
