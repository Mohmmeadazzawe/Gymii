<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTime extends Model
{
    use HasFactory;
    protected $fillable = [
            'day',
            'time',
            'training_id'
    ];
    public function Training(){
        return $this->belongsTo(Training::class);
    }
}
