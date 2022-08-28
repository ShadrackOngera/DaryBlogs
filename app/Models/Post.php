<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;
use Conner\Likeable\Likeable;

class Post extends Model
{
    use HasFactory;
    use sluggable, Likeable;

    protected $fillable = ['title', 'slug', 'description', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function sluggable():array
    {
     return[
       'slug' => [
           'source' => 'title'
       ]
     ];
    }
}
