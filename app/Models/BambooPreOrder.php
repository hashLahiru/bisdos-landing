<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BambooPreOrder extends Model
{
    use HasFactory;

    protected $table = 'bamboo_pre_orders';

    protected $fillable = ['name', 'email', 'phone', 'address'];
}
