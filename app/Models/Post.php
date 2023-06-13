<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Post extends Model
{
    use HasFactory;

    protected $table = "posts";

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

}
