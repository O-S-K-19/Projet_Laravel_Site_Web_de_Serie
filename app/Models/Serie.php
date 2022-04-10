<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Serie extends Model
{
        use HasFactory, Notifiable;

        protected $fillable = ['title','user_id','category','content','movie','serie_maker','year','actors','image','url']; //indiquez les colonnes qui vont etre affectées par les changements

        protected $table = 'series';


    /**
    * Get the user that authored the serie.
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Serie belong to many categories
    public function Categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // serie can have many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // recuperation uniquement des commentaires valides
    public function validComments()
    {
        return $this->comments()->whereHas('user', function ($query) {
            $query->whereValid(true);// autoriser à faire des commentaires
        });
    }
}
