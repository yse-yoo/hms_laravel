<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'stock',
        'summary',
        'description',
        'calorie',
        'is_room_service',
        'image_name',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
