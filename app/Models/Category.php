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

    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" , '-');
    }
}
