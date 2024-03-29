<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'type',
        'title',
        'document',
        'status',
    ];

    public function project(): BelongsTo{
        return $this->belongsTo(Project::class);
    }
}
