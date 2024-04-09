<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = ['country', 'contact', 'dob', 'name', 'gender', 'age', 'blood_group', 'address', 'state', 'district', 'tehsil', 'mobile'];
}
