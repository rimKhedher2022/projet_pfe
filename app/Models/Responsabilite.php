<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsabilite extends Model
{

//     $table->foreignId('stage_id')->constrained('stages')->onUpdate('cascade')->onDelete('cascade');
// $table->foreignId('enseignant_id')->constrained('enseignants')->onUpdate('cascade')->onDelete('cascade');
    use HasFactory;

    protected $fillable = [
        'stage_id',
        'enseignant_id',
        ];
}
