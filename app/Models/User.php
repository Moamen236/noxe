<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'city',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the role for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<Role>
     */
    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the reservations for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany<Reservation>
     */
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
