<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RoleModel extends Model
{
    use HasFactory;
    protected $table = 'tb_role';
    protected $guarded = [
        'id_role'
    ];

    public function tb_users(): HasMany
    {
        return $this->hasMany(User::class, 'id_role', 'id_role');
    }

}
