<?php

namespace App\Models\Admin;

use App\Models\Registrations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'nid', 'phone', 'email'];

    public function registration()
    {
        return $this->hasOne(Registrations::class, 'patient_id');
    }
}
