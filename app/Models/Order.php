<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'status',
        'user_id',
    ];
    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class);
    }

    public function User(){
        return $this->belongsTo(OrderDetail::class);
    }
}

