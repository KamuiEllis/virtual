<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Zone extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'address',
        'courier',
        'price',
        'type',
        'parish',
        'services',
        'perPound'
    ];

    public function toSearchableArray()
    {
        return ['address' => $this->address, 'courier' => $this->courier, 'type' => $this->type, 'parish' => $this->parish];
    }

}
