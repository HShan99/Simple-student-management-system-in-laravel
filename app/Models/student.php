<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'first_name','last_name','contact_No','address','Bday'
    ];
}
