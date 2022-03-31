<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'views',
        'likes',
        'thumbnail_image',
        'main_image',
        'posted_date'
    ];

    public function scopeDescOrder($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'article_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }



}
