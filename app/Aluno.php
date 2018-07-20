<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    // Nome da tabela.
    protected $table = 'tb_aluno';

    // Nada mais do que a primary key da tabela em si.
    protected $primaryKey = 'id_aluno';

    // fillable é todos as colunas que contém na tabela.
    protected $fillable = ['tx_nome', 'tx_sobrenome', 'tx_curso', 'nu_semestre'];

    // Responsável por salvar a data de criação e a de atualização (created_at, updated_at)
    public $timestamps = true;

}
