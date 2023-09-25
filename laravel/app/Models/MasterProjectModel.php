<?php

namespace App\Models;

use App\Models\OvertimeRecordModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MasterProjectModel extends Model
{
    use HasFactory;
    protected $table = 'tb_master_project';

    protected $primaryKey = 'id_project';

    protected $fillable = [
        'project_name',
        'status',
        'is_on_duty'
    ];

    public function tb_overtime_record()
    {
        return $this->hasMany(OvertimeRecordModel::class);
    }
}


