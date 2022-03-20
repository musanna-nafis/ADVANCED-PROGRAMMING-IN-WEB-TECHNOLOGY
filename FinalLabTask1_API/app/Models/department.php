<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;

class department extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function courses(){
    return $this->hasMany(course::class,'departments_id');
    }
}
