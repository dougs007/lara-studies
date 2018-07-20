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

// Grupo de rotas no laravel ou rotas compostas.
Route::group(['prefix' => 'aluno'], function () {
    // Rota do tipo get
    Route::get('/list', 'AlunoController@getAlunos')->name('aluno.list');
    Route::get('/form/{id?}', 'AlunoController@form')->name('aluno.form');
    Route::post('/salvar', 'AlunoController@salvarAluno')->name('aluno.salvarAluno');
    Route::get('/deletar{id}', 'AlunoController@deletarAluno')->name('aluno.deletar');
});

// Rota simples.
Route::get('/', function () {
    return view('welcome');
});
