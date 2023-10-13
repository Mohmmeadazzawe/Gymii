<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    use HasFactory;
    protected $fillable = [
            'training_id',
            'user_id',
            'start',
            'end',
            'price',
            'total',
            'payment_method'
    ];

    public function Training(){
        return $this->belongsTo(Training::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
}
