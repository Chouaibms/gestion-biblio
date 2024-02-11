<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auteur;

class Livre extends Model {
    protected $fillable = ['titre', 'at_pub', 'nb_pages', 'id_auteur'];

    public function auteur() {
        return $this->belongsTo(Auteur::class, 'id_auteur');
    }
}
