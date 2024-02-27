<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Cadse extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'title',
        'moment',
        'description',
        'image',
        'status',
    ];

    public function website(): BelongsTo{
        return $this->belongsTo(Website::class);
    }
}
