@extends('layouts.app')

@section('titulo', 'Agendar visita')
@section('content')
        <div class="container">
            <h2>Agendar visita</h2>

            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <form id="form-visita" action="{{ route('site.visita.salvar') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('auth.visitas._form')
                <div class="input-btn">
                    <button form="form-visita" type="submit" class="btn">Agendar</button>
                </div>
            </form>
        </div>
@endsection
@section('scripts')

    <script>        
        // Todas as horas possíveis
        var $horas = {!! json_encode($horas) !!};
        
        // Todas as visitas agendadas
        var $visitas = {!! json_encode($visitas) !!};
    </script>
    <script src="{{ asset('js/visitas.js') }}"></script>

@endsection