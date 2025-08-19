@if ($paginator->hasPages())
<nav class="flex items-center justify-between border-t border-gray-200 px-4 sm:px-0 dark:border-white/10">
    <div class="-mt-px flex w-0 flex-1">
        @if ($paginator->onFirstPage())
            <span class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-300 dark:text-gray-600">&larr;</span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center border-t-2 border-transparent pt-4 pr-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-white/20 dark:hover:text-gray-200">&larr;</a>
        @endif
    </div>
    <div class="hidden md:-mt-px md:flex">
        @foreach ($elements as $element)
            @if (is_string($element))
                <span class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500">{{ $element }}</span>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span aria-current="page" class="inline-flex items-center border-t-2 border-indigo-500 px-4 pt-4 text-sm font-medium text-indigo-600 dark:border-indigo-400 dark:text-indigo-400">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="inline-flex items-center border-t-2 border-transparent px-4 pt-4 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-white/20 dark:hover:text-gray-200">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
    <div class="-mt-px flex w-0 flex-1 justify-end">
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700 dark:text-gray-400 dark:hover:border-white/20 dark:hover:text-gray-200">&rarr;</a>
        @else
            <span class="inline-flex items-center border-t-2 border-transparent pt-4 pl-1 text-sm font-medium text-gray-300 dark:text-gray-600">&rarr;</span>
        @endif
    </div>
</nav>
@endif
