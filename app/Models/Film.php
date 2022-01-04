<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    public function note_films () {
        return $this->belongsToMany(Film::class, 'film_id');
    }

    public function acteur_films () {
        return $this->belongsToMany(Film::class);
    }
    public function genre_films () {
        return $this->belongsToMany(Film::class);
    }
    public function realisateur_films () {
        return $this->belongsToMany(Film::class);
    }
    
}
