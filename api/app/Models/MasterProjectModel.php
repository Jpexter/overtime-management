<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterProjectModel extends Model
{
    use HasFactory;
    protected $table = 'tb_master_project';

    protected $fillable = [
        'project_name',
        'status',
        'is_on_duty'
    ];

    public function tb_master_project() 
    {
        //
    }
}


