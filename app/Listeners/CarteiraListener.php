<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Auth\Events\Registered;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Carteira;
use App\Models\User;

class CarteiraListener
{
    public function handle(Registered $event)

    {
        //Evento que cria 1 carteira para cada tipo de renda 'fixa e variável' quando o usuário cria conta pela primeira vez

        $user = $event->user;

        $id_user = $user->id;

        $carteira1 = new Carteira();
        $carteira1->nome_carteira = 'Renda fixa';
        $carteira1->tipo_carteira = 'renda_fixa';
        $carteira1->id_user = $id_user;
        $carteira1->save();

        $carteira2 = new Carteira();
        $carteira2->nome_carteira = 'Renda variável';
        $carteira2->tipo_carteira = 'renda_variavel';
        $carteira2->id_user = $id_user;
        $carteira2->save();

        /** @var \App\Models\User $user **/
        $user->carteiras();

        $user->carteiras($carteira1->id);
        $user->carteiras($carteira2->id);
    }
}
