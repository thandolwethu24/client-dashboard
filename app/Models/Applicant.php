<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = [];
//    protected $fillable= ['first_Name', 'last_name', 'mobile_number', 'email_address'];
}
