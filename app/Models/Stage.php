<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{


    use HasFactory;

    protected $fillable = [
        'type',
        'sujet',
        'date_debut',
        'date_fin',
        'societe_id',
        ];

        

    public function etudiant()
      {
        return $this->belongsTo(Etudiant::class);
      }

    public function société()
      {
        return $this->belongsTo(Societe::class);
      }

    public function enseignant()  // un seul enseignant valide le stage
      {
        return $this->belongsTo(Enseignant::class);
      }
}
