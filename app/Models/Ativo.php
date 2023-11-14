<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeAtivo',
        'codigo',
        'descricaoAtivo',
        'valorAtivo',
        
    ];
    
    /**
     * Get the user that owns the Ativo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function carteira(): BelongsTo
    {
        return $this->belongsTo(Carteira::class);
    }

}
