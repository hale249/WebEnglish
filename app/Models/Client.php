<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $table = 'clients';

    protected $guard = 'client';

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active'
    ];
}
