<?php

namespace App\Http\Controllers;

use App\Models\{Carteira, Ativo, User};
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
        //listagem de carteiras

        $carteiras = Carteira::where('id_user', auth()->id())
            ->orderByDesc('id')
            ->simplePaginate(3);

        //Gráfico que informa sobre os ativos nas carteiras

        $catData = Carteira::all();

        if ($catData->count() > 0) {
            foreach ($catData as $cat) {
                $catNome[] = "'".$cat->nomeCarteira."'";
                $catTotal[] = Carteira::where('id', $cat->id)->count();
            }
        } else {
            $catNome = ['0'];
            $catTotal = [0];
        }

        //Formatação para chartjs
        $catLabel =  implode(',', $catNome);
        $catTotal = implode(',', $catTotal);


        return view('dashboard', compact('carteiras','catLabel','catTotal'));
    }
}
