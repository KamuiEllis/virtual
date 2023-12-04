<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'shortDescription',
        'description',
        'cost',
        'quantity',
        'images',
        'weight',
        'cart',
        'productType',
        'discountCost',
        'deal',
        'subcategory',
        'unboxing',
        'partNumber',
        'type',
        'brand',
        'colors'
    ];

    public function toSearchableArray()
    {
        return ['name' => $this->name, 'sku' => $this->sku, 'description' => $this->description, 'shortDescription' => $this->shortDescription, 'cost' => $this, 'subcategory' => $this->subcategory, 'productType' => $this->productType];
    }


}
