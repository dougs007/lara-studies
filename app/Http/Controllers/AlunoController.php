<?php
// Namespace é o caminho que é feito até chamado o arquivo atual, como o package do java.
namespace App\Http\Controllers;

// Os use's no Laravel é como os import's no java, ou o include do próprio PHP.
use App\Aluno;
use Illuminate\Http\Request;

// Mapeamento da Controller de Aluno que extende da Classe pai Controller.
class AlunoController extends Controller
{
    /**
     * Função para recuperar os registros de todos os alunos.
     *
     * @return mixed
     */
    public function getAlunos()
    {
        $alunos = Aluno::all();
        return view('aluno/list', compact('alunos'));
    }

    /**
     * Função para salvar os registros de um novo Aluno.
     *
     * @param Request $request Todos os dados passados no input a serem salvos.
     * @return mixed
     */
    public function salvarAluno(Request $request)
    {
        if ($request->id_aluno) {
            Aluno::find($request->id_aluno)->update($request->input());
        } else {
            // Cria um registro de aluno a partir dos dados informados pelo input.
            Aluno::create($request->input());
        }
        return redirect()->route('aluno.list'); // Redirecionar para a rota que leva a listagem de aluno.
    }

    /**
     * Função para apagar os registros de um Aluno específico.
     *
     * @param $id_aluno
     * @return mixed
     */
    public function deletarAluno($id_aluno)
    {
        Aluno::find($id_aluno)->delete();
        return redirect()->route('aluno.list');
    }

    /**
     *
     */
    public function form($id_aluno = null) // Signigica parâmetro não obrigatório. ou poderia ser $id_aluno = ''
    {
        $aluno = new Aluno();

        if (isset($id_aluno)) {
            $aluno = Aluno::find($id_aluno);
            return view('aluno/form', // Retorna a view do formulário de aluno.
                compact('aluno')); // Compact procura as variáveis informadas nele, no caso ela retornará $id_aluno
        }// Se não tiver a variável ele apenas retorna ao formulário
        return view('aluno/form', compact('aluno'));

        /* ou de outra forma mais simples e com performance maior
        * $aluno = $id_aluno ? Aluno::find($id_aluno) : new Aluno;
        * return view('aluno/form', compact('aluno'));
        *
        */
    }
}
