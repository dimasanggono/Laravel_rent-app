<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'product';

    protected $fillable = [
        'name', 'categories_id', 'place', 'price', 'description', 'image'
    ];
    protected $hidden = [];

    public function Category()
    {
        return $this->belongsTo(Categories::class, "categories_id", 'id');
    }
}
