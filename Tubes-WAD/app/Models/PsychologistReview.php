<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PsychologistReview extends Model
{
    public function psychologist()
    {
        return $this->belongsTo(Psychologist::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
