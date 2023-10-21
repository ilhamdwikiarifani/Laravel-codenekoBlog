<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;



class Kategori extends Model
{
    use HasFactory, Sluggable, Searchable;

    protected $table = 'kategoris';

    protected $fillable = [
        'title',
        'slug',
        'published_at'
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate' => true,
            ]
        ];
    }

    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
        ];
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at']);
    }

    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
