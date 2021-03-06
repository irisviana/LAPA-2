<div id="toggleLeftSidebar" class="d-lg-none position-absolute shadow-sm">
    <a class="btn">
        <span class="fas fa-chevron-right"></span>
    </a>
</div>

<div id="leftSidebar" class="col-lg-2 border-right p-4">
    <p>
        Páginas em <strong>{{ $categoria->nome ?? '' }}</strong>
    </p>
    <input class="form-control mb-3" id="pesquisa_atlas" type="search" id="form-autocomplete" placeholder="Pesquisar...">
    <div id="paginasAtlas" class="list-group p-0 text-left">
       
        @for ($i = 0; $i < $paginas->lastPage(); $i++)
            @if($paginas->currentPage() == ($i + 1))
                <a class="list-group-item active" title="{{ $registros[$i]->titulo }}">{{ $registros[$i]->titulo }}</a>
            @else
                <a class="list-group-item list-group-item-action" title="{{ $registros[$i]->titulo }}" href="{{ route('site.atlas.categoria', $categoria->slug).'?page='.($i + 1) }}">{{ $registros[$i]->titulo }}</a>
            @endif
        @endfor

    </div>
</div>