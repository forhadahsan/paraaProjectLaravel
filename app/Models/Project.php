<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'category_id',
        'slug',
        'title',
        'short_description',
        'description',
        'column_type',
        'image',
        'status',
    ];

    public function category(): BelongsTo{
        return $this->belongsTo(ProjectCategory::class);
    }

}
