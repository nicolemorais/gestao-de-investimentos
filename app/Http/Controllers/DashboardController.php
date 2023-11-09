<?php

namespace App\Http\Controllers;

use App\Models\{Ativo, Transacao, User};
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //carteira

        $ativos = Ativo::where('id_user', auth()->id())
            ->orderByDesc('id')
            ->simplePaginate(3);   

        //Grafico - Ativos
        
        $catData = Ativo::where('id_user', auth()->id())->get();

        if ($catData->count() > 0) {
            foreach ($catData as $cat) {
                $catNome[] = "'".$cat->codigo."'";
                $catTotal[] = Ativo::where('id', $cat->id)->where('id_user', auth()->id())->sum('valorAtivo');
            }
        } else {
            $catNome = ['0'];
            $catTotal = [0];
        }

        //Formatação para chartjs
        $catLabel =  implode(',', $catNome);
        $catTotal = implode(',', $catTotal);

        return view('dashboard', compact('ativos','catLabel','catTotal'));
    }
}
