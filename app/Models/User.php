<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable;
    
    // Role constants
    public const ROLE_ADMIN = 1;
    public const ROLE_USER = 2;

    // Status constants
    public const STATUS_ACTIVE = 1;
    public const STATUS_INACTIVE = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role_id',    
        'name',
        'email',
        'password',
        'status',
        'profile_image',
        'fcm_token',
        'otp',
        'otp_expires_at',
        'otp_request_count',
        'otp_first_request_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    public function isAdmin() {
        return $this->role_id == self::ROLE_ADMIN;
    }

    public function isUser() {
        return $this->role_id == self::ROLE_USER;
    }

    public function isActive(){
        return $this->status == self::STATUS_ACTIVE;
    }

    public function isInactive(){
        return $this->status == self::STATUS_INACTIVE;
    }

}
