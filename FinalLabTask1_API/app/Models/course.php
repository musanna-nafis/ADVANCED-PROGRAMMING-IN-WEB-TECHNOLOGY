<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;

class course extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function departments(){
    return $this->belongsTo(department::class,'departments_id');
    }
}
