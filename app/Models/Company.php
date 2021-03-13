<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $filleable = [
        'name',
        'logo'
    ];
    protected $visible = [
        'id',
        'name',
        'logo',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
