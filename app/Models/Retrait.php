<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retrait extends Model
{
    use HasFactory; 
    protected $fillable = ['id_demande', 'montant', 'nom_investissement','statut', 'devise', 'date_retrait', 'id_user'];
    
    public function updateStatut($statut) { 
        $this->statut = $statut;
        $this->save(); 
    }
}
