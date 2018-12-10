<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Evaluation;
use App\Aluno;
use DB;

class EvaluationController extends Controller
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
        return view('avaliacoes.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        Evaluation::create($request->all());
        session()->flash('mensagem-sucesso','Avaliação Cadastrada com Sucesso!');
        return redirect()->route('avaliacao.turma',$request->turma_id);


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
      return view('avaliacoes.show',['turma' => $turma]);
    }

    public function showTurma($id)
    {
        //
        $turma = Turma::find($id);
        $alunos= Aluno::all();
        $alunosturma = DB::table('turma_alunos')
        ->join('alunos', function ($join) use($id) {
            $join->on('turma_alunos.aluno_id', '=', 'alunos.id')
                ->where('turma_alunos.turma_id', '=', $id);
        })
        ->get();
        //dd($turma->all());
        return view('avaliacoes.show',['turma' => $turma,'alunos' => $alunos, 'alunosturma' => $alunosturma]);
    }

    public function show2()
    {
        //
        $turmas = Turma::orderBy('nome')->get();
        return view('avaliacoes.turmas')->with('turmas', $turmas);

    }

    public function show3()
    {
        //
        $turmas = Turma::orderBy('nome')->get();
        return view('avaliacoes.grafico_turma')->with('turmas', $turmas);

    }

    public function showAlunos($id)
    {
        //
          $alunos = DB::table('turma_alunos')
        ->join('alunos', function ($join) use($id) {
            $join->on('turma_alunos.aluno_id', '=', 'alunos.id')
                ->where('turma_alunos.turma_id', '=', $id);
        })
        ->get();
        return view('avaliacoes.alunos',['alunos' => $alunos,'turma_id' => $id]);


    }

    public function showAvaliacao($id,$turma_id)
    {
        //
          $avaliacao = DB::select('select e.id as avaliacao_id,
                    e.aluno_id, e.turma_id, e.peso, e.altura, e.observacao,
                    e.doenca, e.created_at, a.id, a.nome, a.data_nascimento,
                    a.matricula, a.sexo, a.certidao
                    from evaluations as e
                    inner join alunos as a
                    on e.aluno_id=a.id
                    where e.aluno_id= ?',[$id]);


        //dd($avaliacao);
        if(empty($avaliacao)){

          session()->flash('mensagem-erro','Aluno Não Possui Avaliações');

          return redirect()->route('avaliacao.showAlunos',$turma_id);

        }else{
        //dd($avaliacao->all());
          return view('avaliacoes.individual',['avaliacao' => $avaliacao,'turma_id' => $avaliacao[0]->turma_id]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function delete($id,$id1,$id2)
     {
         //

         DB::delete('delete from evaluations where id = ?',[$id]);
         session()->flash('mensagem-sucesso','Avaliação Excluída!');
         return redirect()->route('avaliacao.show_avaliacao',[$id1, $id2]);
     }


     public function countAll()
     {
         //
         $total = DB::select('select e.id,e.peso, e.altura
                   from evaluations as e');
         return view('avaliacoes.estado_geral',['total' => $total]);

     }

     public function countTurma($id)
     {
         //
         $turma = DB::select('select t.id,t.nome
                   from turmas as t where id = ?',[$id]);
         $total = DB::select('select e.id,e.peso, e.altura
                   from evaluations as e where turma_id = ? order by created_at DESC',[$id]);
         return view('avaliacoes.estado_turma',['total' => $total,'turma' => $turma]);

     }

    public function destroy(Evaluation $avaliacao)
    {
        //
        $avaliacao->delete();
        session()->flash('mensagem','Aluno Excluído com sucesso');
        return redirect()->route('avaliacao.index');
    }
}
