<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;


class Brand extends Model
{
    use HasFactory, Sluggable, Searchable;

    protected $fillable = [
        'name',
        'slug',
    ];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
                'onUpdate' => true,  
            ]
        ];
    }
    
    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
        ];
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
