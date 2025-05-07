<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Tag extends Model
{
    protected $fillable = [
        'name'
    ];

    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
