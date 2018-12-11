<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use DB;

class AlunoController extends Controller
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
        $alunos = Aluno::orderBy('nome')->get();
        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('alunos.create');
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
            'matricula.required'         => 'O campo Matrícula é obrigatório.',
            'matricula.max'              => 'O campo Matrícula não deve exceder 20 caracteres.',
            'nome.required'              => 'O campo Nome é obrigatório.',
            'nome.max'              => 'O campo Nome não deve exceder 150 caracteres.',
            'data_nascimento.required'          => 'O campo Data de Nascimento é obrigatório.',
            'sexo.required'               => 'O campo Sexo é obrigatório.',
            'sexo.min'               => 'Escolha um Sexo.',
            'certidao.required'               => 'O campo Certidão de Nascimento é obrigatório.',
            'certidao.max'               => 'O campo Certidão de Nascimento não deve exceder 15 caracteres.',
            'telefone.required'                 => 'O campo Telefone é obrigatório.',
            'telefone.max'                 => 'O campo Telefone não deve exceder 15 caracteres.',
            'nome_mae.required'                 => 'O campo Nome da Mãe é obrigatório.',
            'nome_mae.max'               => 'O campo Nome da Mãe não deve exceder 150 caracteres.',
            'nome_pai.required'                => 'O campo Nome do Pai é obrigatório.',
            'nome_pai.max'               => 'O campo Nome do Pai não deve exceder 150 caracteres.',
            'endereco.required'                => 'O campo Endereço é obrigatório.',
            'endereco.max'               => 'O campo Professor não deve exceder 200 caracteres.'
        ];

        $validatedData = $request->validate([
          'matricula' => 'required|max:50',
          'nome' => 'required|max:150',
          'data_nascimento' => 'required',
          'sexo' => 'required|integer|min:1|max:2',
          'certidao' => 'required|max:15',
          'telefone' => 'required|max:15',
          'nome_mae' => 'required|max:150',
          'nome_pai' => 'required|max:150',
          'endereco' => 'required|max:200'],$mensagens);
        $data = [
          'matricula' => request('matricula'),
          'nome' => request('nome'),
          'data_nascimento' => request('data_nascimento'),
          'sexo' => request('sexo'),
          'certidao' => request('certidao'),
          'telefone' => request('telefone'),
          'nome_mae' => request('nome_mae'),
          'nome_pai' => request('nome_pai'),
          'endereco' => request('endereco') ];
        Aluno::create($data);
        session()->flash('mensagem-sucesso','Aluno Cadastrado com Sucesso');

        return redirect('/alunos');
    }

    public function buscar(Request $request)
    {
        //
        $alunos = DB::table('alunos')
                ->where('nome', 'like','%'.$request->nome.'%')
                ->get();
        return view('alunos.index')->with('alunos', $alunos);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        //
            return view('alunos.show') ->with('aluno', $aluno);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        //
          return view('alunos.edit',['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        //
        $mensagens = [
            'matricula.required'         => 'O campo Matrícula é obrigatório.',
            'matricula.max'              => 'O campo Matrícula não deve exceder 20 caracteres.',
            'nome.required'              => 'O campo Nome é obrigatório.',
            'nome.min'              => 'O campo Nome não deve exceder 150 caracteres.',
            'data_nascimento.required'          => 'O campo Data de Nascimento é obrigatório.',
            'sexo.required'               => 'O campo Sexo é obrigatório.',
            'sexo.min'               => 'Escolha um Sexo.',
            'certidao.required'               => 'O campo Certidão de Nascimento é obrigatório.',
            'certidao.max'               => 'O campo Certidão de Nascimento não deve exceder 15 caracteres.',
            'telefone.required'                 => 'O campo Telefone é obrigatório.',
            'telefone.max'                 => 'O campo Telefone não deve exceder 15 caracteres.',
            'nome_mae.required'                 => 'O campo Nome da Mãe é obrigatório.',
            'nome_mae.max'               => 'O campo Nome da Mãe não deve exceder 150 caracteres.',
            'nome_pai.required'                => 'O campo Nome do Pai é obrigatório.',
            'nome_pai.max'               => 'O campo Nome do Pai não deve exceder 150 caracteres.',
            'endereco.required'                => 'O campo Endereço é obrigatório.',
            'endereco.max'               => 'O campo Professor não deve exceder 200 caracteres.'
        ];

        $validatedData = $request->validate([
          'matricula' => 'required|max:50',
          'nome' => 'required|max:150',
          'data_nascimento' => 'required',
          'sexo' => 'required|integer|min:1|max:2',
          'certidao' => 'required|max:15',
          'telefone' => 'required|max:15',
          'nome_mae' => 'required|max:150',
          'nome_pai' => 'required|max:150',
          'endereco' => 'required|max:200'],$mensagens);
        $data = [
          'matricula' => request('matricula'),
          'nome' => request('nome'),
          'data_nascimento' => request('data_nascimento'),
          'sexo' => request('sexo'),
          'certidao' => request('certidao'),
          'telefone' => request('telefone'),
          'nome_mae' => request('nome_mae'),
          'nome_pai' => request('nome_pai'),
          'endereco' => request('endereco') ];
        $aluno->fill($data);
        $aluno->save();

        return redirect()->route('alunos.show',$aluno->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        //
        $avaliacaoaluno = DB::select('select * from evaluations where aluno_id = ?',[$aluno->id]);
        //dd($avaliacaoaluno);
        if(empty($avaliacaoaluno)){
          $aluno->delete();
          session()->flash('mensagem-sucesso','Aluno Excluído com sucesso.');
          return redirect()->route('alunos.index');
        }else{
          session()->flash('mensagem-erro','Não foi possível excluir. O aluno possui avaliações cadastradas.');
          return redirect()->route('alunos.index');
        }
    }
}
