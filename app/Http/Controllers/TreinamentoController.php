<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreinamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treinamentos = \App\Models\Treinamento::all(); //pegar todos os treinamentos
        //chamar a view de treinamento
        return view('treinamento.index', compact('treinamentos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //chamar a view de criar treinamento
        return view('treinamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all()); //debug para ver os dados do treinamento

        //validar os dados do treinamento
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'local' => 'required|string|max:255',
            'instrutor' => 'required|string|max:255',
            'carga_horaria' => 'required|integer|min:1',
        ]);

        //criar o treinamento
        \App\Models\Treinamento::create($request->all());

        //redirecionar para a lista de treinamentos
        return redirect()->route('treinamentos.index')->with('success', 'Treinamento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //dd($id); //debug para ver o id do treinamento
        //pegar o treinamento pelo id
        $treinamento = \App\Models\Treinamento::findOrFail($id);

        //chamar a view de mostrar o treinamento
        return view('treinamento.show', compact('treinamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id); //debug para ver o id do treinamento
        //pegar o treinamento pelo id
        $treinamento = \App\Models\Treinamento::findOrFail($id);
        //chamar a view de editar o treinamento
        return view('treinamento.edit', compact('treinamento'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all()); //debug para ver os dados do treinamento
        //validar os dados do treinamento

        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'local' => 'required|string|max:255',
            'instrutor' => 'required|string|max:255',
            'carga_horaria' => 'required|integer|min:1',
        ]);
        //pegar o treinamento pelo id
        $treinamento = \App\Models\Treinamento::findOrFail($id);
        //atualizar o treinamento
        $treinamento->update($request->all());
        //redirecionar para a lista de treinamentos
        return redirect()->route('treinamentos.index')->with('success', 'Treinamento atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //softDelete
    }
}
