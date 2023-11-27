<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'parish',
        'delivery_type',
        'area',
        'cart_id',
        'total_payment',
        'status',
        'customer_id'
    ];


    public function toSearchableArray()
    {
        return ['name' => $this->name, 'address' => $this->address, 'parish' => $this->parish, 'delivery_type' => $this->delivery_type, 'area' => $this->area];
    }
}
