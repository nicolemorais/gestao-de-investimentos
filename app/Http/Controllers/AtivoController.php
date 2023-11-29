<?php

namespace App\Http\Controllers;

use App\Models\{Ativo, Carteira, User};
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtivoController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */

    public function create(): View
    {
        return view('ativo.create');
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'nome_ativo' => 'required|string|max:15',
            'codigo' => 'required|string|max:10|unique:ativos',
            'descricao' => 'nullable|string|max:120',
            'valor' => 'required|numeric',
            'id_carteira' => 'required|integer',
        ]);

        $carteira = Carteira::findOrFail($request->input('id_carteira'));

        $ativo = new Ativo();
        $ativo->nome_ativo = $request->input('nome_ativo');
        $ativo->codigo = $request->input('codigo');
        $ativo->descricao = $request->input('descricao');
        $ativo->valor = $request->input('valor');
        $ativo->id_carteira = $carteira->id;

        $ativo->save();

        return redirect('dashboard')->with('success', 'Ativo criado com sucesso!');
    }

    /**
     * Display the specific resource.
     */

    public function show($id)
    {
        $carteiras = Carteira::findOrFail($id)->where('id_user', auth()->user()->id)->get();

        foreach ($carteiras as $carteira) {
            $ativos = $carteira->ativos;
        }

        return view('ativos', compact('carteiras', 'ativos'));
    }

    /**
     * Show the form for editing the specific resource.
     */

    public function edit(string $id)
    {

        $ativo = Ativo::findOrFail($id);

        return view('ativo.edit', compact($id));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $ativo = Ativo::findOrFail($id);

        $request->validate([
            'nome_ativo' => 'required|string|max:15',
            'codigo' => 'required|string|max:10|unique:ativos,codigo,' . $id,
            'descricao' => 'nullable|string|max:120',
            'valor' => 'required|numeric',
        ]);

        $ativo->id_carteira = $request->input('id_carteira');

        $ativo->update($request->all());

        return back()->with('success', 'Ativo editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ativo = Ativo::findOrFail($id);

        $ativo->delete();

        return back()->with('success', 'Ativo apagado com sucesso!');
    }
}
