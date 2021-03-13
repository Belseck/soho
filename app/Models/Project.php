<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $filleable = [
        'name',
        'image',
        'description',
        'outstanding',
        'class',
    ];

    public $visible = [
        'id',
        'name',
        'image',
        'description',
        'outstanding',
        'class',
        'company_data',
        'tags_data',
    ];

    protected $appends = [
        'company_data',
        'tags_data',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'project_tags', 'project_id', 'tag_id');
    }

    public function getCompanyDataAttribute()
    {
        return $this->company;
    }

    public function getTagsDataAttribute()
    {
        return $this->tags;
    }
}
