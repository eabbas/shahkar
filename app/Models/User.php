<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


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
    public function contactuss()
    {
        return $this->hasMany(contactUs::class);
    }
    public function roles()
    {
        return $this->belongsToMany(role::class, 'user_roles');
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_roles');
    }
    public function userCourses()
    {
        return $this->hasMany(userCourse::class);
    }
    public function courses()
    {
        return $this->belongsToMany(course::class, 'user_courses')->withPivot(['id', 'user_id', 'course_id']);
    }
    public function lessoncomments()
    {
        return $this->hasMany(lessoncomments::class);
    }
    public function questions()
    {
        return $this->hasMany(coursequestion::class);
    }
    public function answers()
    {
        return $this->hasMany(courseanswer::class, 'answer_id');
    }
    public function Suggestions()
    {
        return $this->hasMany(lessonsuggestion::class);
    }
    public function answerreactions()
    {
        return $this->hasMany(courseanswerreaction::class);
    }
    public function Errors()
    {
        return $this->hasMany(lessonerror::class);
    }
}
