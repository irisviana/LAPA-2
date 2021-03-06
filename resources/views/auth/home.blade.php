@extends('layouts.app')
@section('titulo', 'Gerenciar - LAPA')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
     @if(Session::has('success'))
          <div class="alert alert-success alert-dismissible">
               {{ Session::get('success') }}
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
               </button>
         </div>
    @endif     
    @guest
        <h2>Você não está logado</h2>
    @else
        @if(Auth::user()->cpf_verified_at != null)
             <h2 class="mb-4">Bem-vindo(a), {{ Auth::user()->name }}!</h2>
        
        <div class="row justify-content-center">
            <a class="clickable-card" href="{{ route('auth.postagens') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-newspaper"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Postagens') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.postagem.adicionar') }}" class="btn">
                            Adicionar
                        </a>
                        <a href="{{ route('auth.postagens') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
            <a class="clickable-card" href="{{ route('auth.atlas') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-book-open"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Atlas') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.atla.adicionar') }}" class="btn">
                            Adicionar
                        </a>
                        <a href="{{ route('auth.atlas') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
            <a class="clickable-card" href="{{ route('auth.materiais') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-file"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Materiais') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.material.adicionar') }}" class="btn">
                            Adicionar
                        </a>
                        <a href="{{ route('auth.materiais') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
            <a class="clickable-card" href="{{ route('auth.visitas') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-id-card-alt"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Visitas') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('site.visita.busca') }}" class="btn">
                            Adicionar
                        </a>
                        <a href="{{ route('auth.visitas') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
        </div>
        <div class="row justify-content-center align-items-start">
            <h3 class="w-100 mb-4 mt-5">Mais opções</h3>
            <a class="clickable-card" href="{{ route('auth.disciplinas') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fas fa-bookmark"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Assuntos
                                   (disciplinas)') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.disciplina.adicionar') }}" class="btn">
                            Adicionar
                        </a>
                        <a href="{{ route('auth.disciplinas') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
            <a class="clickable-card" href="{{ route('auth.categorias') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-list-ul"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Áreas de conhecimento') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.categoria.adicionar') }}" class="btn">
                            Adicionar
                        </a>
                        <a href="{{ route('auth.categorias') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
	        <a class="clickable-card" href="{{ route('auth.acesso_gerenciamento') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-check-circle"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Solicitações de gerenciamento') }}
                        </>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.acesso_gerenciamento') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
            <a class="clickable-card" href="{{ route('auth.contatos') }}">
                <div class="card manage">
                    <div class="card-header">
                        <span class="fa fa-info-circle"></span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">
                            {{ __('Contatos do laboratório') }}
                        </h3>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('auth.contatos') }}" class="btn">
                            Gerenciar
                        </a>
                    </div>
                </div>
            </a>
         </div>
         @else
            <h2 class="mb-4">Sua solicitação está em análise, {{ Auth::user()->name }}!</h2>
-           <h2 class="mb-4">Você ainda não tem permissão para gerenciar o sistema!</h2>   
        @endif
    @endguest
</div>
@endsection
