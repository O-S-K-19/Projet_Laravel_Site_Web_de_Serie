<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    protected $fillable = ['title','content','acteurs','url','tags']; //indiquez les colonnes qui vont etre affectées par les changements

    protected $table = 'series';

/**
* Get the user that authored the serie.
*/
public function author()
{
return $this->belongsTo(User::class,'author_id');
}

/**
* Get the user Comments'
*/

public function Comments()
{
return $this->hasMany(Comment::class,'serie_id');
}

}
