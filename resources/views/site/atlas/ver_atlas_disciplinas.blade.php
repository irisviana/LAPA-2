@extends('layouts.app')

@section('titulo', 'Atlas Interativo - '.$disciplina->nome ?? '')
@section('content')
    <div class="container">
        <h2 class="fadeInDown" data-anime="150">Atlas Interativo</h2>
        <div class="d-flex justify-content-around row fadeInDown" data-anime="300">
            <div class="col-11 col-md-10 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Mostrando áreas de conhecimento do assunto <strong>{{ ucfirst($disciplina->nome) }}</strong></h3>
                        <input class="form-control" id="pesquisa_categoria" type="search" id="form-autocomplete" placeholder="Pesquisar...">
                    </div>
                    @if (count($paginas) < 1)
                        <p>Ops, esse assunto não possui nenhuma área de conhecimento ou atlas</p>
                    @else
                    <div id="categorias" class="list-group">
                        
                        @foreach ($registros as $registro)
                            <div class="material-group list-group-item list-group-item-action">
                                    
                                @if (count($registro->atla) >= 1)
                                    <a class="item disciplina-atla-item" href="{{ route('site.atlas.categoria', $registro->slug) }}">
                                        {{ ucfirst($registro->nome) }}
                                    </a>
                                @endif
                                    
                            </div>
                        @endforeach

                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection 