<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'contacts';

    protected $fillable = ['id','name', 'email', 'message'];


    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }








}
