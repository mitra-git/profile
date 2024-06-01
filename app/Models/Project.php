<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = [
        'title',
        'header_image',
        'description',
        'siteplan',
        'image',
        'location',
    ];
    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class, 'id_project');
    }

    public function projectType()
    {
        return $this->hasMany(ProjectType::class, 'id_project');
    }
}
