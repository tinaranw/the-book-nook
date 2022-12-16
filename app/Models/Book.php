<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

     protected $fillable = ['title', 'year_published', 'author', 'description', 'status', 'genre_tags', 'synopsis'];

    //Relationship to User
    public function user(){
        //(class, foreign id)
        return $this->belongsTo(User::class, 'user_id');
    }

    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            // dd($filters(['tag']));
            $query->where('genre_tags', 'like', '%' .request('tag'). '%');
        }

        if($filters['search'] ?? false){
            //where (name of the column with the input in the request())
            $query->where('title', 'like', '%' .request('search'). '%')
                ->orWhere('description', 'like', '%' .request('search'). '%')
                ->orWhere('genre_tags', 'like', '%' .request('search'). '%');
        }
       
    }
    
}
