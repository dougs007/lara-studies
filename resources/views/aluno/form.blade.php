<div class="container">
    <form method="post" action="{{route('aluno.salvarAluno')}}">
        <input type="hidden" name="id_aluno" value="{{ $aluno->id_aluno or null }}">
        {{csrf_field()}}
        <input type="text" name="tx_nome" placeholder="Nome" value="{{ $aluno->tx_nome or null }}">
        <input type="text" name="tx_sobrenome" placeholder="Sobrenome" value="{{ $aluno->tx_sobrenome or null }}">
        <input type="text" name="tx_curso" placeholder="Curso" value="{{ $aluno->tx_curso or null }}">
        <input type="text" name="nu_semestre" placeholder="Semestre" value="{{ $aluno->nu_semestre or null }}">

        <button type="submit">Submit</button>
    </form>
</div>