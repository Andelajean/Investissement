<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_investissement',
        'montant',
        'rendement',
        'date_investissement',
        'date_echeance',
        'statut',
        'id_user',
    ];
}
