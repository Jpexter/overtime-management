<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterDivisionModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_master_division';

    protected $primaryKey = 'id_division';
    
    protected $guarded = [
        'id_division'
    ];

}
