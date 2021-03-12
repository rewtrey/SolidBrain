<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $fillable = ['title', 'parent_id', 'published', 'created_by', 'modified_by'];


    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = Str::slug(mb_substr($this->title, 0, 40) . "-", '-');
    }

    // Polymorphic relation with articles
    public function articles()
    {
        return $this->morphedByMany('App\Models\Article', 'categoryable');

    }

    public function scopeLastCategories($query, $count)
    {
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }

    public function blogs()
    {
        return $this->morphedByMany('App\Models\Blog', 'categoryable');

    }

    public function footers()
    {
        return $this->morphedByMany('App\Models\Footer', 'categoryable');

    }
}
