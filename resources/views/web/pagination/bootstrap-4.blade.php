@if ($paginator->hasPages())
    <nav aria-label="Page navigation example" data-aos="zoom-in">
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="btn btn-danger" aria-hidden="true">&lsaquo;&lsaquo; Back</span>
                </li>
            @else
                <li class="page-item">
                    <a class="btn btn-danger" href="{{ $paginator->previousPageUrl() }}#portfolio" rel="prev"
                        aria-label="@lang('pagination.previous')">&lsaquo;&lsaquo; Back</a>
                </li>
            @endif

            &nbsp;&nbsp;&nbsp;

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="btn btn-danger" href="{{ $paginator->nextPageUrl() }}#portfolio" rel="next"
                        aria-label="@lang('pagination.next')">&rsaquo;&rsaquo; Next</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="btn btn-danger" aria-hidden="true">&rsaquo;&rsaquo; Next</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
