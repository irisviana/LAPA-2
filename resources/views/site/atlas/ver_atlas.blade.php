@extends('layouts.app')

@section('titulo', 'Atlas Interativo')
@section('content')
<div class="d-flex position-relative">

    @if (count($paginas) >= 1)

        @include('site.atlas._sidebar')

    @endif

    <div id="page" class="container col-lg-10 atlas">    
        <h2>Atlas Interativo</h2>
        <div class="breadcrumbs d-flex text-left justify-content-lg-start justify-content-between">
            <p>
                <a href="{{ route('site.atlas.index') }}">Atlas interativo</a> /
                <a href="{{ route('site.atlas.disciplina', $categoria->disciplina->id) }}">{{ ucfirst($categoria->disciplina->nome) }}</a> /
                {{ $categoria->nome ?? '' }} 
            </p>
        </div>

        @if (count($paginas) < 1)
            <p>Ops, essa categoria ainda não possui páginas</p>
        @else

            @foreach ($paginas as $pagina)
                <div class="row justify-content-between">
                    <div class="col-md-8 col-12 text-left">
                        <h3 class="title">{{ $pagina->titulo }}</h3>
                        <p class="text">
                            {{ $pagina->descricao }}
                        </p>
                    </div>
                    <div id="overlay"></div>
                    <div class="col-md-4 col-12">
                        <img class="img img-fluid" src="{{ asset($pagina->anexo) }}"> 
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $paginas->links() }}
                </div>
            @endforeach

        @endif

    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/toggle_sidebar.js') }}"></script>
@endsection