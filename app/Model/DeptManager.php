<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DeptManager extends Model
{
    protected $table = 'dept_manager';
    protected $primaryKey = 'emp_no';

    public function emp_relate(){
        return $this->hasOne('App\Model\Employee','emp_no');
    }
}
