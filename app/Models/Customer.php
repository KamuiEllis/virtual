<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'firstname',
        'lastname',
        'type',
        'email'
    ];


    public function toSearchableArray()
    {
        return ['firstname' => $this->firstname, 'lastname' => $this->lastname, 'email' => $this->email];
    }

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
