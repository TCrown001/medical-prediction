<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    use HasFactory;
    protected $table = 'symptoms';
    protected $guarded = [];

    public function Prediction()
    {
        return $this->belongsTo('App\Models\Prediction', 'prediction')->withDefault(['name' => '']);
    }

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_symptoms');
    }
}
