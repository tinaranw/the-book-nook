<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

     protected $fillable = ['title', 'cover_image', 'year_published', 'author', 'genre_tags', 'synopsis', 'description', 'status'];

    //Relationship to User
    public function user(){
        //(class, foreign id) 
        //('id' -> reference)
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function scopeFilter($query, array $filters){
        if($filters['genre_tag'] ?? false){
            // dd($filters(['tag']));
            $query->where('genre_tags', 'like', '%' .request('genre_tag'). '%');
        }

        if($filters['search'] ?? false){
            //where (name of the column with the input in the request())
            $query->where('title', 'like', '%' .request('search'). '%')
                ->orWhere('description', 'like', '%' .request('search'). '%')
                ->orWhere('synopsis', 'like', '%' .request('search'). '%')
                ->orWhere('author', 'like', '%' .request('search'). '%')
                ->orWhere('genre_tags', 'like', '%' .request('search'). '%');
        }
       
    }
    
}
