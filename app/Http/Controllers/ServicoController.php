<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index()
    {
        $servicos = Servico::paginate(4);
        return view('servicos.index', compact('servicos'));
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function store(Request $request)
    {
        $dados = $request->all();

        Servico::create($dados);

        return redirect()->route('servicos.index');
    }

    public function edit(int $id)
    {
        $servico = Servico::find($id);

        return view('servicos.edit', compact('servico'));
    }
}
