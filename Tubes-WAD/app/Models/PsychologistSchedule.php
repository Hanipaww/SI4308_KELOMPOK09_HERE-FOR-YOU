<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsychologistSchedule extends Model
{
    protected $guarded = ['id'];
    
    public function psychologist()
    {
        return $this->belongsTo(Psychologist::class);
    }
}