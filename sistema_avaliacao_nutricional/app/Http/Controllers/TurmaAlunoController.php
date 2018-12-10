<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Aluno;
use App\TurmaAluno;
use DB;

class TurmaAlunoController extends Controller
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
        return view('turma_alunos.index')->with('turmas', $turmas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Turma $turma)
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
        TurmaAluno::create($request->all());
        return redirect()->route('turma_aluno.turma',$request->turma_id);


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

        return view('turma_alunos.show',['turma' => $turma]);
    }

    public function showTurma($id)
    {
        //
        $turma = Turma::find($id);
        $alunos= Aluno::orderBy('nome')->get();
        $alunosturma = DB::table('turma_alunos')
        ->join('alunos', function ($join) use($id) {
            $join->on('turma_alunos.aluno_id', '=', 'alunos.id')
                ->where('turma_alunos.turma_id', '=', $id);
        })
        ->get();
        //dd($turma->all());
        return view('turma_alunos.show',['turma' => $turma,'alunos' => $alunos, 'alunosturma' => $alunosturma]);
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
     public function delete($id1,$id2)
     {
         //

         DB::delete('delete from turma_alunos where turma_id = ? and aluno_id = ? ',[$id1,$id2]);
         session()->flash('mensagem','Aluno Excluído da turma');
         return redirect()->route('turma_aluno.turma',$id1);
     }

    public function destroy(TurmaAluno $turmaaluno)
    {
        //
        $turmaaluno->delete();
        session()->flash('mensagem','Aluno Excluído com sucesso');
        return redirect()->route('turmas.index');
    }
}
