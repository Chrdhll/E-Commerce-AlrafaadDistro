<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'fadhil_categories';
    protected $fillable = ['name', 'slug'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
}