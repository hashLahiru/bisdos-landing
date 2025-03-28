<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactUs extends Model
{
    use HasFactory;

    protected $table = 'contact_details';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'message', 'status'];
}
