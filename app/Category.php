<?php

namespace App;

use App\Transformers\CategoryTransformer;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $transformer = CategoryTransformer::class;

    protected $fillable = [
        'name',
        'description',
    ];

    public function products() {
        return $this->belongsToMany(Product::class);
    }
}
