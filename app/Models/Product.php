<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;
/**
 * Class Product
 *
 * @property $id
 * @property $description
 * @property $Precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description', 'Precio', 'stock', 'slug'];

    protected static function boot()
    {
        
      
parent::boot();

        static::creating(function ($product) {
            
  
$product->slug = Str::random(25); // Generate slug from description
        });
    }
    



}
