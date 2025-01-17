<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depot extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_depot', 'montant', 'statut', 'devise', 'date_depot', 'email', 'id_user',
    ];

}
