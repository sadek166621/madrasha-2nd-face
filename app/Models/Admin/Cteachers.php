<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cteachers extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class,'teacher_id');
    }
    public function course()
    {
        return $this->belongsTo(Course::class,'course_id');
    }

}
