<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'body',
        'publish_date',
        'status',
        'cover_image',
    ];

    public function images()
    {
        return $this->hasMany(ExtraImage::class, 'project_id');
    }
}
