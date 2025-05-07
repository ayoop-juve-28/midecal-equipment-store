<?php

namespace App\Models;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin  extends Authenticatable
{
    use HasRoles;
    protected $guard_name='admin';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];



    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

}
