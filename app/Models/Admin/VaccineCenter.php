<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccineCenter extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['center_name', 'address', 'daily_limit'];
}
