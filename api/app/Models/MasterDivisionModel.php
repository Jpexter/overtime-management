<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDivisionModel extends Model
{
    use HasFactory;

    protected $table = 'tb_role';
    protected $fillable = [
        'name_division',
        'status'
    ];
}
