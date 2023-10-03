<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Substatus extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function status (){
        return $this->belongsTo(Status::class , 'status_id');
    }
}
