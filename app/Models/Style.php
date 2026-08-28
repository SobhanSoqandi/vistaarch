<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $fillable = [
        'title',
        'slug',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}