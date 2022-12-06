<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    use HasFactory;

    public function createur()
    {
        return $this->belongsTo(\App\Models\Creatif::class, 'creatif');
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Models\Tag::class, 'projets_has_tags', 'projet', 'tag');
    }
}
