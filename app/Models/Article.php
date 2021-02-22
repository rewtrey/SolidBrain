<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'description', 'meta_keyword'];

    // Mutators
    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title) . "-" , '-');
    }

    // Polymorphic relation with categories
    public function categories()
    {
        return $this->morphToMany('App\Models\Category', 'categoryable');
    }
}
