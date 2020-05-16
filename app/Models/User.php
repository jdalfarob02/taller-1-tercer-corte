<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
        protected $fillable = [
        'nombre',
        'email',
        'telefono',
        'titulo'
        ];
        

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}
