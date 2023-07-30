<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function symptoms()
    {
        return $this->belongsToMany(Symptom::class, 'disease_symptoms');
    }
}
