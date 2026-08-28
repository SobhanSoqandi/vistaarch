<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'style_id',
        'service_id',
        'company_id',
        'year',
        'location',
        'area',
        'summary',
        'description',
        'cover_image',
        'is_published',
    ];

    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }
}