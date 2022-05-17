@if ($paginator->hasPages())
<div class="row">
    <div class="col">
        <nav class="d-flex justify-items-center justify-content-center text-white">
                <ul class="pagination">
                    @if (!$paginator->onFirstPage())
                    <li class="page-item"><a class="page-link text-dark" href={{ $paginator->previousPageUrl() }}>Previous</a></li>
                    {{-- <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="btn btn-transparent text-dark">&lt;</a> --}}
                    @endif
                    @foreach ($elements as $element)
                    
                    @if (is_array($element))
                    @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <li class="page-item"><span class="page-link text-dark text-white bg-blue">{{ $page }}</span></li>
                    @else
                    <li class="page-item"><a class="page-link text-dark" href={{ $url }}>{{ $page }}</a></li>
                        {{-- <a href="{{ $url }}" class="btn btn-transparent fw-bold text-dark">{{ $page }}</a> --}}
                    @endif
                @endforeach
            @endif
            @endforeach
            @if (!$paginator->onLastPage())
            <li class="page-item"><a class="page-link text-dark" href={{ $paginator->nextPageUrl() }}>Next</a></li>
            {{-- <a href="{{ $paginator->nextPageUrl() }}" rel="prev" class="btn btn-transparent text-dark">&gt;</a> --}}
            @endif
            </ul>
        </nav>

    </div>
</div>
    @endif
