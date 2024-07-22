<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'B_Name',
        'B_Email',
        'B_Mobile',
        'B_Date',
        'B_Meal',
        'B_People',
        'B_Table_No'
    ];
}
