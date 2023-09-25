<?php

namespace App\Models;

use App\Models\RoleModel;
use Laravel\Sanctum\HasApiTokens;
use App\Models\OvertimeRecordModel;
use App\Models\MasterBasicSalaryModel;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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

    public function tb_basic_salary()
    {
        return $this->hasOne(MasterBasicSalaryModel::class);
    }

    public function tb_overtime_record()
    {
        return $this->hasMany(OvertimeRecordModel::class);
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
