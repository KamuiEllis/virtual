<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use Searchable;

    protected $fillable = [
        'firstname',
        'lastname',
        'password',
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
