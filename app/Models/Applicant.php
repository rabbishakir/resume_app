<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'residency',
        'skills',
        'residency_location',
        'certifications',
        'dob',
        'gender',
        'clearance',
        'clearance_yes',
        'criminal_record',
        'criminal_record_yes',
        'comment',
        'undergraduate_institution',
        'undergraduate_major',
        'undergraduate_from_to',
        'graduate_institution',
        'graduate_major',
        'graduate_from_to',
        'phd_institution',
        'phd_major',
        'phd_from_to',
    ];

    protected $casts = [
        'skills'             => 'array',
        'residency_location' => 'array',
        'certifications'     => 'array',
    ];

    /**
     * @return string
     * @throws Exception
     */
    public function getAgeAttribute(): string
    {
        $dob      = new \DateTime($this->dob);
        $now      = new \DateTime();
        $interval = $dob->diff($now);

        return $interval->format('%y years and %m months');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }
}
