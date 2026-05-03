<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'content', 'category', 'thumbnail', 'date', 'user_id'];
    
    protected $casts = [
        'date' => 'date',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
