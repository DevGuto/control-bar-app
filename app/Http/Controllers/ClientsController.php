<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Clients::query()->get();
        return view('home', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clients = Clients::query()->get();
        return view('cadastro', compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nome' => ['required', 'string', 'max:1000'],
            'cpf' => ['required', 'string', 'max:36'],
            'nascimento' => ['required', 'string', 'max:36'],
            'celular' => ['required', 'string', 'max:36'],
            'status' => ['required', 'int', 'max:11']
        ]);

        if ($validator->fails()) {
            return redirect()->route('home');
        }

        $client = new Clients;
        $client->nome = $request->input('nome');
        $client->cpf = $request->input('cpf');
        $client->nascimento = $request->input('nascimento');
        $client->celular = $request->input('celular');
        $client->status = $request->input('status');
        $client->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $client = Clients::find($id);

        if ($client) {
            return view('editar', compact('client'));
        }

        return redirect()->route('home');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nome' => ['required', 'string', 'max:1000'],
            'cpf' => ['required', 'string', 'max:36'],
            'nascimento' => ['required', 'string', 'max:36'],
            'celular' => ['required', 'string', 'max:36'],
            'status' => ['required', 'int', 'max:11']
        ]);

        if ($validator->fails()) {
            return redirect()->route('home');
        }

        $client = new Clients;
        $client = $client->query()->find($id);
        $client->nome = $request->input('nome');
        $client->cpf = $request->input('cpf');
        $client->nascimento = $request->input('nascimento');
        $client->celular = $request->input('celular');
        $client->status = $request->input('status');
        $client->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clients = Clients::where('id', $id)->delete();

        return redirect()->route('home');
    }

    public function detalhes()
    {
        return view('detalhes');
    }
}
