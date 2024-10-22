<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'description',
        'quantity',
        'price',
        'discount',
        'featured',
        'rating'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->slug = self::generateUniqueSlug($product->title);
            $product->total_price = $product->price - ($product->price * $product->discount / 100);
        });
    }

    public static function generateUniqueSlug($title)
    {
        // Generate initial slug
        $slug = Str::slug($title);
        $count = Product::where('slug', 'like', '%' . $slug . '%')->count();

        // Append number if a duplicate exists
        return $count > 0 ? "{$slug}-{$count}" : $slug;
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
