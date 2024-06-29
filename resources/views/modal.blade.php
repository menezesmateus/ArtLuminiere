@extends('layouts.index')
@section('content')
<header>
    <link rel="stylesheet" href="{{ asset('modal.css') }}">
</header>
<div class="modal">
    <div class="modal-body">
        <h1>Titulo da Arte:</h1>
        <input type="text" class="title">
        <h1>Descrição:</h1>
        <input type="text" class="description">
        <div class="modal-footer">
            <input type="file" class="image" alt="Enviar Imagem">
            <div class="buttons">
                <button class="cancel">Cancelar</button>
                <button class="send">Enviar</button>
            </div>
        </div>
    </div>
</div>
@endsection