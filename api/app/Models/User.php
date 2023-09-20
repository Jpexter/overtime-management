<?php

namespace App\Models;

use App\Models\RoleModel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'tb_users';
    protected $primaryKey = 'id_users';
    // protected $fillable = [
    //     'name',
    //     'username',
    //     'email',
    //     'password',
    //     'phone_number',
    //     'id_role',

    // ];
    protected $guarded = [
        'id_users'
    ];
    public function tb_role(): \Illuminate\Database\Eloquent\Relations\BelongsTo 
    {
        return $this->belongsTo(RoleModel::class, 'id_role', 'id_role');   
    }

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
}
