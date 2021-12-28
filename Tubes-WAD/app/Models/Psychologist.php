<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Psychologist extends Model
{
    protected $guarded = ['id'];
    public function photo()
    {
        return asset('storage/' . $this->photo);
    }

    public function schedules()
    {
        return $this->hasMany(PsychologistSchedule::class);
    }

    public function reviews()
    {
        return $this->hasMany(PsychologistReview::class);
    }
}
