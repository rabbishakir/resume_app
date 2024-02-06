<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = [
        'applicant_id',
        'company_name',
        'position',
        'from_to',
    ];
}
