<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;

class User extends Model
{
    use HasFactory, Billable;

    public function order()
    {
        return $this->hasOne(Order::class);
    }
}
