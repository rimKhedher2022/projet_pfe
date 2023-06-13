<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{

    // $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
    // $table->string('filePath');
    // $table->date('date_depot');
    use HasFactory;
    protected $fillable = [
        'filePath',
        'date_depot',
        'user_id',
        ];
    public function etudiant()
        {
            return $this->belongsTo(Etudiant::class);
        }
}
