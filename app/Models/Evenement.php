<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'thème', 'date_debut', 'date_fin', 'description', 'cout_joumalier', 'expert_id'
    ];

    public function expert()
    {
        return $this->belongsTo(Expert::class);
    }

    public function ateliers()
    {
        return $this->hasMany(Atelier::class);
    }
}
