<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'content',
        'author',
        'user_id'
    ];
    public function author()
    {
        return $this->hasMany(User::class);
    }

}

