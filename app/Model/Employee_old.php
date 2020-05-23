<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model // ผูกอยู่กับตาราง employees แล้ว
{
    // กรณีชื่อตารางไม่ตรงกับ Model
    // protected $table = 'tbl_employee';

    // กรณีที่ชื่อ primary key ไม่ใช่ id
   // protected $primaryKey = 'emp_id';

   // กรณีที่ไม่มีฟิลด์ created_at และ updated_at
   // protected $timestamps = false;

   // การเปลี่ยนชื่อฟิลด์ created_at และ updated_at
   // const CREATED_AT = 'creation_date';
   // const UPDATED_AT = 'last_update';
}
