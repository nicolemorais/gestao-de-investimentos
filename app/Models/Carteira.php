<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carteira extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeCarteira'    
    ];

      /**
     * Get the user that owns the Ativo
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ativos()
    {
        return $this->hasMany(Ativo::class);
    }

}
