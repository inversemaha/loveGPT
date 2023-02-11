<?php

namespace App\Models;



use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Applicants extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = "id";
    public $timestamps = true;
    public $guarded = [];

    protected $hidden = [
        'password'
    ];
}
