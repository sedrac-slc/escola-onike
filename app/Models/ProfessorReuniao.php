<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessorReuniao extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'id',
        'professor_id',
        'reuniao_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'      
    ];

    protected $table = "professor_reuniao";

}
