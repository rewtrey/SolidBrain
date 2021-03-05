<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = ['title', 'description_short', 'description', 'slug', 'published', 'meta_keyword'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function isTheovnr($user)
    {
        return $this->user_id === $user->id;
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-", '-');
    }

    public function categories()
    {
        return $this->morphToMany('App\Models\Category', 'categoryable');
    }
    public function scopeLastBlogs($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}
