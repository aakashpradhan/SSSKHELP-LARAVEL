<?php

// Donor.php (Model)

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Donor extends Model implements Authenticatable
{
    use AuthenticatableTrait;
    use HasFactory;

    protected $fillable = ['country', 'contact', 'dob', 'name', 'gender', 'age', 'blood_group', 'address', 'state', 'district', 'tehsil', 'mobile'];
}
