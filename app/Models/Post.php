<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model

{
    use HasFactory, Sluggable, Searchable;

    protected $table = 'posts';

    protected $fillable = [
        'userId',
        'kategoriId',
        'statusId',
        'title',
        'slug',
        'status',
        'excerpt',
        'body',
        'foto',
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

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategoriId', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'userId', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'statusId', 'id');
    }
}
