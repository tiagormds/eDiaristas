<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServicoRequest;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $servicos = Servico::paginate(8);
        return view('servicos.index', compact('servicos'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('servicos.create');
    }

    /**
     * @param ServicoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ServicoRequest $request)
    {
        $dados = $request->all();

        Servico::create($dados);

        return redirect()->route('servicos.index')->with('mensagem', 'Serviço criado com sucesso!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Servico $servico)
    {
        return view('servicos.edit', compact('servico'));
    }

    /**
     * @param int $id
     * @param ServicoRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Servico $servico, ServicoRequest $request)
    {
        $dados = $request->all();

        $servico->update($dados);
        return redirect()->route('servicos.index')->with('mensagem', 'O serviço foi atualizado com sucesso!');
    }
}
