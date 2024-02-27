<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'project_id',
        'website_url',
        'category',
        'slug',
        'title',
        'address',
        'short_description',
        'description',
        'image',
        'status',
    ];

    public function project(){
        return $this->belongsTo(Project::class, 'project_id');
    }
}
