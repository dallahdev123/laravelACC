<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DbCallCenter extends Model
{
    protected $fillable = ['nom', 'prenom', 'address', 'email', 'telephone'];
}
