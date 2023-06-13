<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{

    use HasFactory;
    protected $fillable = [
        'nom','prenom','email','image','password','matricule',
       ];



       public function stages()  // un enseignant valide plusieurs stages
       {
           return $this->hasMany(Stage::class);
       }   
}
