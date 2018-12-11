<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use DB;

class TurmaController extends Controller
{
    public function __construct()
     {
       $this->middleware('auth');
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $turmas = Turma::orderBy('nome')->get();
        return view('turmas.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('turmas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $mensagens = [
            'nome.required'         => 'O campo Nome é obrigatório.',
            'nome.max'              => 'O campo Nome não deve exceder 50 caracteres.',
            'escolaridade.required'              => 'O campo Escolaridade é obrigatório.',
            'escolaridade.max'              => 'O campo Escolaridade não deve exceder 30 caracteres.',
            'ano.required'          => 'O campo Ano é obrigatório.',
            'ano.max'               => 'O campo Ano não deve exceder 4 números.',
            'ano.min'               => 'O campo Ano deve ser composto por 4 números.',
            'turno.required'                 => 'O campo Turno é obrigatório.',
            'turno.min'                 => 'Escolha um Turno.',
            'turno.integer'                 => 'O campo CNPJ é obrigatório.',
            'sala.required'                => 'O campo Sala é obrigatório.',
            'sala.max'                => 'O campo Sala não deve exceder 3 números.',
            'professor.required'               => 'O campo Professor é obrigatório.',
            'professor.max'               => 'O campo Professor não deve exceder 50 caracteres.'
        ];

        $validatedData = $request->validate([
          'nome' => 'required|max:50',
          'escolaridade' => 'required|max:30',
          'ano' => 'required|max:4|min:4',
          'turno' => 'required|integer|min:1|max:4',
          'sala' => 'required|max:3',
          'professor' => 'required|max:50'],$mensagens);
        $data = [
          'nome' => request('nome'),
          'escolaridade' => request('escolaridade'),
          'ano' => request('ano'),
          'turno' => request('turno'),
          'sala' => request('sala'),
          'professor' => request('professor') ];
        Turma::create($data);
        session()->flash('mensagem-sucesso','Turma Cadastrada com Sucesso');

        //return back();
        //Turma::create($request->all());

        return redirect('/turmas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        //
          return view('turmas.show') ->with('turma', $turma);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
      return view('turmas.edit',['turma' => $turma]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        //
        $mensagens = [
            'nome.required'         => 'O campo Nome é obrigatório.',
            'nome.max'              => 'O campo Nome não deve exceder 50 caracteres.',
            'escolaridade.required'              => 'O campo Escolaridade é obrigatório.',
            'escolaridade.max'              => 'O campo Escolaridade não deve exceder 30 caracteres.',
            'ano.required'          => 'O campo Ano é obrigatório.',
            'ano.max'               => 'O campo Ano não deve exceder 4 números.',
            'ano.min'               => 'O campo Ano deve ser composto por 4 números.',
            'turno.required'                 => 'O campo Turno é obrigatório.',
            'turno.min'                 => 'Escolha um Turno.',
            'sala.required'                => 'O campo Sala é obrigatório.',
            'sala.max'                => 'O campo Sala não deve exceder 3 números.',
            'professor.required'               => 'O campo Professor é obrigatório.',
            'professor.max'               => 'O campo Professor não deve exceder 50 caracteres.'
        ];

        $validatedData = $request->validate([
          'nome' => 'required|max:50',
          'escolaridade' => 'required|max:30',
          'ano' => 'required|max:4|min:4',
          'turno' => 'required|integer|min:1|max:4',
          'sala' => 'required|max:3',
          'professor' => 'required|max:50'],$mensagens);
        $data = [
          'nome' => request('nome'),
          'escolaridade' => request('escolaridade'),
          'ano' => request('ano'),
          'turno' => request('turno'),
          'sala' => request('sala'),
          'professor' => request('professor') ];
        $turma->fill($data);
        $turma->save();
        session()->flash('mensagem-sucesso','Turma Atualizada com Sucesso');
        return redirect()->route('turmas.show',$turma->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        //
        $alunoturma = DB::select('select * from turma_alunos where turma_id = ?',[$turma->id]);

        if(empty($alunoturma)){
          $turma->delete();
          session()->flash('mensagem-sucesso','Turma Excluída com Sucesso');
          return redirect('/turmas');
        }else{
          session()->flash('mensagem-erro','Impossível excluir! Esta turma contém alunos cadastrados.');
          return redirect('/turmas');
        }
    }
}
