<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Published extends Model
{
    use HasFactory;

    protected $fillable = ['author', 'year_published', 'publishable_id', 'publishable_type'];

    public function publishedable()
    {
        return $this->morphTo();
    }

}
