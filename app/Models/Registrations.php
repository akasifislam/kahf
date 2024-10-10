<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registrations extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'vaccine_center_id', 'status'];
}
