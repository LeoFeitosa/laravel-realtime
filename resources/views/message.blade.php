@extends('layouts.app')

@section('content')
<form action="" method="post" class="container">
    {{ csrf_field() }}
    <input type="text" name="title" id="title" class="form-control" placeholder="Titulo">
    <textarea name="body" id="body" class="form-control" cols="30" rows="10" placeholder="Mensagem"></textarea>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection