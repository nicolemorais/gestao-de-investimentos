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
use Illuminate\Support\Facades\Auth;


class CarteiraController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('carteiras');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomeCarteira' => ['required', 'string', 'max:20']
        ]);

        $carteira = new Carteira();
        $carteira->nomeCarteira = $request->get('nomeCarteira');
        $carteira->id_user = Auth::id();
        $carteira->save();

       return redirect('dashboard')->with('success', 'Carteira criada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $carteira = Carteira::findOrFail($id);

        $carteira->delete();

        return redirect()->route('dashboard')->with('success', 'Carteira removida com sucesso!');
    }
}
