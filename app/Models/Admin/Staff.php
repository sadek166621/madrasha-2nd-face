<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function location()
    {
        return $this->belongsTo(Location::class,'location_id');
    }
}
