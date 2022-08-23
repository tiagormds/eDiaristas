<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsuarioRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function GuzzleHttp\Promise\all;

class UsuarioController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $usuarios = User::paginate(10);

        return view('usuarios.index', compact('usuarios'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('usuarios.create');
    }


    /**
     * @param UsuarioRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UsuarioRequest $request)
    {
        User::create([
                         'name' => $request->name,
                         'email' => $request->email,
                         'password' => Hash::make($request->password),
                     ]);

        return redirect()->route('usuarios.index')->with('mensagem', 'Usuário Cadastrado com Sucesso!');
    }


    /**
     * @param User $usuario
     * @return void
     */
    public function show(User $usuario)
    {
        //
    }


    /**
     * @param User $usuario
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }


    /**
     * @param User $usuario
     * @param UsuarioRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $usuario, UsuarioRequest $request)
    {
        $usuario->update([
                             'name' => $request->name,
                             'email' => $request->email,
                             'password' => Hash::make($request->password),
                         ]);

        return redirect()->route('usuarios.index')->with('mensagem', 'Dados Atualizados!');
    }


    /**
     * @param User $usuario
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('mensagem', 'Usuário apagado!');
    }
}
