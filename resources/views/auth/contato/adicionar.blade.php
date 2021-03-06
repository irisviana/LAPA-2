@extends('layouts.app')

@section('titulo', 'Informações do Contato Laboratório')
@section('content')
        <div class="container">
            <h2> Adicionar Informações de Contato do LAPA</h2>
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <form action="{{ route('auth.contato.salvar') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @include('auth.contato._form')
                    <div class="input-btn">
                        <button class="btn">Salvar</button>
                    </div>
                </form>
        </div>
@endsection