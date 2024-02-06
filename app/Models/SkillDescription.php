<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillDescription extends Model
{
    protected $fillable = ['skill_id', 'description'];

    public function skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
