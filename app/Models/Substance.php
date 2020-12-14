<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
//use Orion\Concerns\DisableAuthorization;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Substance extends Model
{
    use HasFactory;
    //use DisableAuthorization; //lol not here, but in the controller

    protected $fillable = ['INN', 'mechanism'];
}
