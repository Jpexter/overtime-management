<?php

namespace App\Models;

use App\Models\MasterProjectModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterDivisionModel extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'tb_master_division';

    protected $primaryKey = 'id_division';
    
    protected $guarded = [
        'id_division'
    ];

    public function tb_overtime_record()
    {
        return $this->hasMany(MasterProjectModel::class);
    }
}
