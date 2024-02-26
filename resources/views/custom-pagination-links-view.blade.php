@if ($paginator->hasPages ())


    <div class="d-flex justify-content-center">

        @if ($paginator->onFirstPage())
            <button class="btn btn-success ml-1" disabled>Prev</button>
        @else
            <button class="btn btn-success ml-1" wire:click='previousPage'>Prev</button>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="btn btn-secondary ml-1"
                                wire:click='gotoPage({{ $page }})'>{{ $page }}</button>
                        @else
                            <button class="btn btn-success ml-1"
                                wire:click='gotoPage({{ $page }})'>{{ $page }}</button>
                        @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages ())
            <button class="btn btn-success ml-1" wire:click='nextPage'>Next</button>
        @else
            <button class="btn btn-success ml-1" disabled>Next</button>
        @endif

    </div>

@endif



