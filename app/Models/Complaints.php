<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    use HasFactory;
    protected $fillable = [
            'training_id',
            'managment_note',
            'status',
            'description'
    ];
    public function Training(){
        return $this->belongsTo(Training::class);
    }
    public function Trainings(){
        return $this->hasMany(Training::class);
    }
}
