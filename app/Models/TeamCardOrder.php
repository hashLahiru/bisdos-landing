<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeamCardOrder extends Model
{
    use HasFactory;

    protected $table = 'team_card_order';

    protected $fillable = ['name', 'email', 'phone', 'company', 'member_count', 'message'];
}
