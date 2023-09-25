<?php

namespace App\Models;

use App\Models\User;
use App\Models\MasterProjectModel;
use App\Models\MasterDivisionModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OvertimeRecordModel extends Model
{
    use HasFactory;

    protected $table = 'tb_overtime_record';

    public $timestamps = false;

    protected $primaryKey = 'id_record';

    protected $guarded = [
        'id_record'
    ];

    public function tb_users() 
    {
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }

    public function tb_master_division()
    {
        return $this->belongsTo(MasterDivisionModel::class, 'id_division');
    }

    public function tb_master_project()
    {
        return $this->belongsTo(MasterProjectModel::class, 'id_project');
    }
}
