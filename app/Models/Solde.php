<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solde extends Model
{
    use HasFactory;
    protected $fillable = [
        'montant', 'mise_jour', 'email', 'id_user',
    ];
}
