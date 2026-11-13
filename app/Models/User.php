<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Posts;
class User extends Authenticatable
{
    use HasFactory, Notifiable;


    protected $fillable = [
        'name',
        'email',
        'password',
        'governorate',
        'profile_image',
        'account_type',
        'is_active',
        'position',
        'likes_count',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function posts()
    {
        return $this->hasMany(Posts::class);
    }

    public function isAdmin()
    {
        return $this->account_type === 'admin';
    }

    public function profileLikes()
    {
        return $this->hasMany(profile_likes::class);
    }

    public function likedProfiles()
    {
        return $this->belongsToMany(
            User::class,
            'profile_likes',
            'liker_id',
            'user_id'
        );
    }
}
