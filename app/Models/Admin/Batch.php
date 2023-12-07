<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function student()
    {
        return $this->belongsTo(Student::class,'student_id');
    }

}
