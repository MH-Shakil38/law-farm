<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Route;
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
        'name',
        'username',
        'email',
        'phone',
        'phone1',
        'specialization',
        'lawyer_type',
        'address',
        'image',
        'file',
        'user_type',
        'isActive',
        'role_id',
        'ip',
        'ip1',
        'email_verified_at',
        'password',
        'created_by',
        'updated_by',
        'last_activity',
        'last_logedin',
        'isOnline',
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

    public function logs(){
        return $this->hasMany(ActivityLog::class,'user_id')->orderBy('created_at','DESC');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_role');
    }

    public function hasRole($role)
    {
        return $this->roles->contains('name', $role);
    }

    public function hasPermission()
    {
        foreach ($this->roles as $role) {
            $route = Route::currentRouteName();
            if ($role->permissions->contains('route', $route)) {
                return true;
            }
        }
        
        return false;
    }

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function ($query) {
    //         $query->created_by = auth()->user()->id;
    //     });
    //     static::updating(function ($query) {
    //         $query->updated_by = auth()->user()->id;
    //     });
    // }

    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }
}
