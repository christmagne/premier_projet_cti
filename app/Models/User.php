<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $table = 'users';

    public $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    public static $rules = [
        'id'=> 'integer|unique',
        'name' => 'required|string',
        'email' => 'required|string',
        'email_verified_at' => 'nullable',
        'password' => 'required|string',
        'remember_token' => 'nullable|string',

        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function classe()
{
    return $this ->belongstomany(classe::class);
}

    
}
