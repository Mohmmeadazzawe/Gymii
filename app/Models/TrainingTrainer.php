<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingTrainer extends Model
{
    use HasFactory;
    protected $fillable = [
        'trainer_id',
        'training_id',

    ];
    public function Trainer(){
        return $this->belongsTo(User::class,'trainer_id');
    }
    public function Training(){
        return $this->belongsTo(Training::class);
    }
}
