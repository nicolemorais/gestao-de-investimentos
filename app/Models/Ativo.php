<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ativo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_ativo',
        'codigo',
        'descricao',
        'valor',

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
