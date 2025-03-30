<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
    ];

    /**
     * Отношение к модели User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Отношение к модели Product.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
