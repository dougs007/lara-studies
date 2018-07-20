@extends('welcome')
@section('conteudo')

    <div class="row">
        <div class="col s12">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title">Listagem de Alunos</span>
                    <table id="tabela" border="line">
                        <tr align="center">
                            <td>ID</td>
                            <td>NOME</td>
                            <td>SOBRENOME</td>
                            <td>CURSO</td>
                            <td>SEMESTRE</td>
                            <td>AÇÕES</td>
                        </tr>
                        @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->id_aluno}}</td>
                                <td>{{$aluno->tx_nome}}</td>
                                <td>{{$aluno->tx_sobrenome}}</td>
                                <td>{{$aluno->tx_curso}}</td>
                                <td>{{$aluno->nu_semestre}}</td>
                                <td align="center">
                                    <a href="{{route('aluno.deletar', $aluno->id_aluno)}}">Excluir</a>
                                    <a href="{{route('aluno.form', $aluno->id_aluno)}}">Alterar</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed-action-btn">
        <a href="{{route('aluno.form')}}" class="btn-floating btn-large red white-text">
            <i class="material-icons">add</i>
        </a>
    </div>

@endsection