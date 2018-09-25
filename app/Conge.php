<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    
    protected $fillable = [
        'Nom_emp',
        'Type',
        'Duree',
        'Date_Debut',
        'Date_Fin',
        'Observation',
        'Livreur',
        'Date_Recu',
        'Date_Retour',
        'Medecin',
        'Date_visite',
        'Adresse_medecin',
       
    ]; 
   protected $table = 'conges';

   public function conge()
   {
    return $this->belongsTo(Employe::class);
   }
}
