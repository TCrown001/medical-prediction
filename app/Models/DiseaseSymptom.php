<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseSymptom extends Model
{
    use HasFactory;
    protected $table='disease_symptoms';
    protected $guarded = [];
    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_symptoms');
    }
}
