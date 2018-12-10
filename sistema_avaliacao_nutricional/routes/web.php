<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::resource('/turmas', 'TurmaController');
Route::resource('/alunos', 'AlunoController');
Route::resource('/turma_alunos', 'TurmaAlunoController');
Route::resource('/avaliacoes', 'EvaluationController');

Route::get('/add', [
	'uses' => 'TurmaAlunoController@create',
	'as' => 'turma.add']);

Route::get('/showTurma/{id}', [
	'uses' => 'TurmaAlunoController@showTurma',
	'as' => 'turma_aluno.turma']);

Route::get('/delete/{id}/{id2}', [
	'uses' => 'TurmaAlunoController@delete',
	'as' => 'turma_aluno.delete']);

Route::get('/delete_avaliacao/{id}/{id2}/{id3}', [
	'uses' => 'EvaluationController@delete',
	'as' => 'avaliacao.delete']);

Route::get('/showTurma_avaliacao/{id}', [
	'uses' => 'EvaluationController@showTurma',
	'as' => 'avaliacao.turma']);

Route::get('/show2', [
	'uses' => 'EvaluationController@show2',
	'as' => 'avaliacao.show2']);

  Route::get('/show3', [
  	'uses' => 'EvaluationController@show3',
  	'as' => 'avaliacao.show3']);

Route::get('/show_alunos/{id}', [
	'uses' => 'EvaluationController@showAlunos',
	'as' => 'avaliacao.showAlunos']);

Route::get('/countAll', [
	'uses' => 'EvaluationController@countAll',
	'as' => 'avaliacao.countAll']);

Route::get('/countTurma/{id}', [
	'uses' => 'EvaluationController@countTurma',
	'as' => 'avaliacao.countTurma']);

Route::get('/show_avaliacao/{id}/{id2}', [
	'uses' => 'EvaluationController@showAvaliacao',
	'as' => 'avaliacao.show_avaliacao']);

Route::post('/save', [
	'uses' => 'TurmaAlunoController@store',
	'as' => 'turma.save']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
