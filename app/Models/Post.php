<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{

    use HasFactory;
    //
    protected $fillable = ['title', 'author_name' ,'slug', 'content', 'category', 'image'];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
        // belongsTo(User::class, 'user_id') → Artinya setiap postingan hanya punya satu author, yang diambil dari user_id.
    }
}
