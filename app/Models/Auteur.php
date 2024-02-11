<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Livre;

class Auteur extends Model {
    protected $fillable = ['nom', 'prenom'];

    public function livres() {
        return $this->hasMany(Livre::class, 'id_auteur');
    }
}

