<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'credits',
        'project_architects',
        'cost_consultant',
        'date',
        'collaborating_architects',
        'project_manager',
        'client',
        'executing_architect',
        'acoustics',
        'area',
        'structural_engineer',
        'main_contraactor',
        'smith_jones_architecture',
        'services_engineer',
        'awards',
        'status',
    ];
}
