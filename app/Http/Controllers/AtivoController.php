<?php

namespace App\Http\Controllers;

use App\Models\{Ativo, User};
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AtivoController extends Controller
{
    protected $ativo;
    protected $user;

    public function __construct(Ativo $ativo, User $user)
    {
        $this->ativo = $ativo;
        $this->user = $user;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view ('ativos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        /// Cria um novo ativo
        $ativo = new Ativo();
        $ativo->fill([
            'nomeAtivo' => $request->input('nomeAtivo'),
            'codigo' => $request->input('codigo'),
            'descricaoAtivo' => $request->input('descricaoAtivo'),
            'valorAtivo' => abs($request->input('valorAtivo')),
        ]);

        // Define o usuário autenticado como o proprietário do ativo
        $ativo->id_user = auth()->id();

        // Salva o ativo
        $ativo->save();


        return redirect('dashboard')->with('success', 'Ativo criado com sucesso!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
      $ativo = Ativo::findOrFail($id);

      return view('ativo.edit', compact('ativo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $ativo = Ativo::findOrFail($id);

       $ativo->update($request->all());

       return redirect()->route('dashboard')->with('success', 'Ativo atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ativo = Ativo::findOrFail($id);

        $ativo->delete();
 
        return redirect()->route('dashboard')->with('success', 'Ativo apagado com sucesso!');
    }
}
