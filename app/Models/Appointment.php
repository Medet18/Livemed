<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, $id)
 * @method static select(string $string, string $string1, string $string2, string $string3, string $string4)
 */
class Appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointment_reason',
        'appointment_date',
        'hospital_name',
        'doctor_specialist',
        'appointment_number',
        'appointment_user_id',
        'appointment_doctor_id',

    ];
}
