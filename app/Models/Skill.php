<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name'];

    public function skillDescription()
    {
        return $this->hasMany(SkillDescription::class);
    }
}
