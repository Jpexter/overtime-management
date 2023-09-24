<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterBasicSalaryModel extends Model
{
    use HasFactory;

    protected $table = 'tb_master_basic_salary';

    protected $primaryKey = 'id_basic_salary';


    protected $guarded = [
        'id_basic_salary',
    ];

    public function tb_users()
    {
        return $this->belongsTo(User::class, 'id_users');
    }
}
