<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'description',
        'type',

    ];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}