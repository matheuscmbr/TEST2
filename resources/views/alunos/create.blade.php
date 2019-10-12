@extends('layout')

@section('content')
<br>
<h2 class="text-center font-weight-bold text-dark">Inserir Aluno</h2>
<br>
<div class="container">
    <form id="createAlunos" name="createAlunos" method="POST" action="/alunos">
        {{ csrf_field() }}
        <div class="container">
        <div class="form-group">
            <label for="lblnome" class="font-weight-bold">Nome: </label>
            <input class=" form-control col-6 col-md-6" type="text" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="lbldisciplina" class="font-weight-bold">Disciplina: </label>
            <input class="form-control col-6 col-md-6" type="text" id="disciplina" name="disciplina" required>
        </div>
        <div class="form-group">
            <label for="lbldata" class="font-weight-bold">Data: </label>
            <input class="form-control col-6 col-md-2" type="date" id="data" name="data" required>
        </div>
        <div class="form-group">
            <label for="lblnota" class="font-weight-bold">Nota: </label>
            <input class=" form-control col-2" type="text" id="nota" name="nota" required>
        </div>
        
    <div class=" container col-md-8">
            <input type="button" class="btn btn-dark" id="btnGrv" value="Retornar" 
    onclick="javascript: location.href = '/alunos'">
            <input type="submit" class="btn btn-success " id="btnGrv" value="Gravar">
            <input type="reset" class="btn btn-info" id="btnReset" value="Limpar">
        </div>
    
    </form>
</div>
    
@endsection