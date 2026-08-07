<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;


class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'family',
        'email',
        'phoneNumber',
        'password',
        'mainImage',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
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
    public function roles()
    {
        return $this->belongsToMany(role::class, 'user_roles');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
    // public static function isAdmin(User $user = null)
    // {
    //     if (!$user) {
    //         $user = Auth::user();
    //     }
    //     $flag = false;
    //     foreach ($user->roles as $role) {
    //         if ($role['name'] == 'admin') {
    //             $flag = true;
    //         }
    //     }
    //     return $flag;
    // }
    public function hasRole($roles)
    {
        return $this->roles()->whereIn('name', $roles)->exists();
    }
}
