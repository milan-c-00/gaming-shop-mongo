<?php
namespace App\Models;
use MongoDB\Laravel\Eloquent\Model;
use MongoDB\Laravel\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];



}
