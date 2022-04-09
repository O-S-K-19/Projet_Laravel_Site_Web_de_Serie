<?php

namespace App\Models;

use App\Models\User;
use App\Models\Serie;
use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory, NodeTrait, Notifiable;
    protected $fillable = [
        'content',
        'serie_id',
        'user_id',
    ];

    // a comment is done by user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // a comment is for a serie
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
}
