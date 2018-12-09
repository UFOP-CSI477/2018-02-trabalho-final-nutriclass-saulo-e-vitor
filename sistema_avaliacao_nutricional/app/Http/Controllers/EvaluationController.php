<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Evaluation;
use App\Aluno;
use DB;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $turmas = Turma::all();
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
        return redirect('/avaliacoes');
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
        $turmas = Turma::all();
        return view('avaliacoes.turmas')->with('turmas', $turmas);

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
        return view('avaliacoes.alunos')->with('alunos', $alunos);

    }

    public function showAvaliacao($id)
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
          return redirect('/show2');
        }else{
        //dd($avaliacao->all());
          return view('avaliacoes.individual')->with('avaliacao', $avaliacao);
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
     public function delete($id,$id1)
     {
         //

         DB::delete('delete from evaluations where id = ?',[$id]);
         session()->flash('mensagem','Avaliação Excluída da turma');
         return redirect()->route('avaliacao.show_avaliacao',$id1);
     }

    public function destroy(Evaluation $avaliacao)
    {
        //
        $avaliacao->delete();
        session()->flash('mensagem','Aluno Excluído com sucesso');
        return redirect()->route('avaliacao.index');
    }
}
