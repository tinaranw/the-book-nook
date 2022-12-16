<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

     protected $fillable = ['title', 'year_published', 'publisher', 'description', 'status'];

    //Relationship to User
    public function user(){
        //(class, foreign id)
        return $this->belongsTo(User::class, 'user_id');
    }
    
}
