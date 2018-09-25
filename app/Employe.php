<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    protected $fillable = [
        'Photo',
        'Nom',
        'CIN',
        'Tel',
        'Date_naissance',
        'Situation_familiale',
        'Nbr_enfants',
        'Adresse',
        'Date_embauche',
        'Num_Somme',
        'Fonction',
        'Echelon',
        'Grade',
        'Retraite',
        'Date_retraite',
        'Mute',
        'SAJ',
       
    ]; 
   protected $table = 'employes';

   public function conges()
   {
    return $this->hasMany(Conge::class);
   }
}
