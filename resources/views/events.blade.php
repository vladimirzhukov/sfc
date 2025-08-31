@extends('layouts.layout')

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}",
    "url": "{{ url()->current() }}",
    "description": "{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}",
    "isPartOf": {
        "@@type": "WebSite",
        "name": "SFC.CY",
        "url": "{{ route('web::index') }}"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "SFC.CY"
    }
}
</script>
@php
$allLanguages = config('languages.locales');
$breadcrumbItems = collect([['name' => __('Home'), 'url' => route('web::index')], ['name' => __('Events'), 'url' => route('web::events')]]);
if (Route::currentRouteName() == 'web::events::filter') {
    $filterPages = [
        'events/online' => __('Online Events'),
        'events/past' => __('Past Events'),
        'events/free' => __('Free Events'),
        'events/cities' => __('Choose City')
    ];
    foreach ($filterPages as $page => $pageName) {
        if (str_contains(request()->getRequestUri(), $page)) {
            $breadcrumbItems->push([
                'name' => $pageName,
                'url' => route('web::events::filter', ['link' => str_replace('events/', '', $page)])
            ]);
            break;
        }
    }
    if (!$breadcrumbItems->count() > 2 && !empty($currentCategory->id)) {
        $breadcrumbItems->push([
            'name' => $currentCategory->name,
            'url' => route('web::events::filter', ['link' => $currentCategory->slug])
        ]);
    }
    if (!$breadcrumbItems->count() > 2 && !empty($currentCity->id)) {
        $breadcrumbItems->push([
            'name' => $currentCity->name,
            'url' => route('web::events::filter', ['link' => $currentCity->slug])
        ]);
    }
} elseif (Route::currentRouteName() == 'web::events::filter::category' && !empty($currentCategory->parent_id)) {
    if (!empty($allCategories[$currentCategory->parent_id]->id)) {
        $breadcrumbItems->push([
            'name' => $allCategories[$currentCategory->parent_id]->name,
            'url' => route('web::events::filter', ['link' => $allCategories[$currentCategory->parent_id]->slug])
        ]);
    }
    $breadcrumbItems->push([
        'name' => $currentCategory->name,
        'url' => route('web::events::filter::category', [
            'link' => $allCategories[$currentCategory->parent_id]->slug ?? '',
            'category' => $currentCategory->slug
        ])
    ]);
}
@endphp
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [
    @foreach ($breadcrumbItems as $index => $item) {
        "@@type": "ListItem",
        "position": {{ $index + 1 }},
        "name": "{{ $item['name'] }}",
        "item": "{{ $item['url'] }}"
    }@if (!$loop->last),@endif
    @endforeach
    ]
}
</script>
@endsection

@section('content')
<div class="relative isolate overflow-hidden pt-14">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-24 xl:px-24 dark:bg-gray-800/50 dark:after:pointer-events-none dark:after:absolute dark:after:inset-0 dark:after:inset-ring dark:after:inset-ring-white/10 dark:after:sm:rounded-3xl">
        <div class="mx-auto max-w-4xl text-center">
            <h1 class="text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">{{ (!empty($meta->h1) ? $meta->h1 : __('Startup Events Across Cyprus')) }}</h1>
            <p class="mt-6 text-lg/8 text-gray-300">{{ (!empty($meta->subtext) ? $meta->subtext : __('web.events_1')) }}</p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('signup') }}" class="rounded-md bg-orange-500 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-orange-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">{{ __('Submit Event') }}</a>
                <a href="{{ route('web::wa') }}" class="rounded-md bg-white/10 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('Working Afternoons') }}</a>
                <a href="{{ route('web::events::filter', ['link' => 'past']) }}" class="rounded-md bg-white/10 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('Past Events') }}</a>
                <a href="{{ route('web::events::filter', ['link' => 'online']) }}" class="rounded-md bg-white/10 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('Online Events') }}</a>
                <a href="{{ route('web::events::filter', ['link' => 'free']) }}" class="rounded-md bg-white/10 px-4 py-2 text-sm font-semibold text-white shadow-xs hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('Free Events') }}</a>
            </div>
            <div class="mt-10 pt-8 border-t border-white/10">
                <div class="grid grid-cols-2 gap-8 sm:grid-cols-4">
                    <div>
                        <div class="text-2xl font-bold text-white">150+</div>
                        <div class="text-sm text-gray-400">{{ __('Events') }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">1000+</div>
                        <div class="text-sm text-gray-400">{{ __('Members') }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">{{ $categories->count() }}</div>
                        <div class="text-sm text-gray-400">{{ __('Categories') }}</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">{{ $subcategories }}</div>
                        <div class="text-sm text-gray-400">{{ __('Subcategories') }}</div>
                    </div>
                </div>
            </div>
            {{--@if ($cities->isNotEmpty())
                <div class="mt-8 border-t border-white/10 pt-8">
                    <p class="text-sm font-medium text-gray-400 mb-4">{{ __('Browse events by city') }}</p>
                    <div class="flex flex-wrap justify-center gap-3">
                        @foreach ($cities as $city)
                            <a href="#" class="inline-flex items-center rounded-full bg-white/5 px-3 py-1.5 text-sm font-medium text-white hover:bg-white/10 transition-colors duration-200">{{ $city->name }}</a>
                        @endforeach
                        <a href="#" class="inline-flex items-center rounded-full bg-white/5 px-3 py-1.5 text-sm font-medium text-white hover:bg-white/10 transition-colors duration-200">{{ __('All cities') }}</a>
                    </div>
                </div>
            @endif--}}
        </div>
        <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25 dark:opacity-20"></div>
        </div>
    </div>
</div>
<div class="bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
        <div class="lg:grid lg:grid-cols-12 lg:gap-8">
            <div x-show="sidebarOpen" x-transition class="lg:hidden">
                <div class="fixed inset-0 z-[60] flex">
                    <div @click="sidebarOpen = false" class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>
                    <div class="relative h-full flex w-full max-w-xs flex-1 flex-col bg-white dark:bg-gray-800">
                        <div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Filters</h3>
                            <button @click="sidebarOpen = false" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                                <span class="sr-only">{{ __('Close') }}</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="size-6"><path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" /></svg>
                            </button>
                        </div>
                        <div class="flex-1 overflow-y-auto p-6 space-y-8">
                            <div class="bg-white dark:bg-gray-800">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Browse by Industry') }}</h3>
                                <div class="space-y-2">
                                    @if (!empty($currentCategory->id) && empty($currentCategory->parent_id))
                                        @php
                                        if (LaravelLocalization::getCurrentLocale() != 'en') {
                                            $names = json_decode($currentCategory->name_translations, true);
                                            $name = $names[LaravelLocalization::getCurrentLocale()] ?? $currentCategory->name;
                                        } else {
                                            $name = $currentCategory->name;
                                        }
                                        @endphp
                                        <strong class="block text-sm text-gray-700 dark:text-gray-500">{{ $name }}</strong>
                                    @elseif (!empty($currentCategory->id) && !empty($currentCategory->parent_id))
                                        @php
                                        if (LaravelLocalization::getCurrentLocale() != 'en') {
                                            $names = json_decode($allCategories[$currentCategory->parent_id]->name_translations, true);
                                            $name = $names[LaravelLocalization::getCurrentLocale()] ?? $allCategories[$currentCategory->parent_id]->name;
                                        } else {
                                            $name = $allCategories[$currentCategory->parent_id]->name;
                                        }
                                        @endphp
                                        <strong class="block text-sm text-gray-700 dark:text-gray-500">{{ $name }}</strong>
                                    @endif
                                    @if ($categories->isNotEmpty())
                                        @foreach ($categories as $category)
                                            @php
                                            if (LaravelLocalization::getCurrentLocale() != 'en') {
                                                $names = json_decode($category->name_translations, true);
                                                $name = $names[LaravelLocalization::getCurrentLocale()] ?? $category->name;
                                            } else {
                                                $name = $category->name;
                                            }
                                            @endphp
                                            @if (!empty($currentCategory->id) && empty($currentCategory->parent_id))
                                                <a href="{{ route('web::events::filter::category', ['link' => $currentCategory->slug, 'category' => $category->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $name }}</a>
                                            @elseif (!empty($currentCategory->id) && !empty($currentCategory->parent_id))
                                                <a href="{{ route('web::events::filter::category', ['link' => $allCategories[$currentCategory->parent_id]->slug, 'category' => $category->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $name }}</a>
                                            @else
                                                <a href="{{ route('web::events::filter', ['link' => $category->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $name }}</a>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="bg-white dark:bg-gray-800">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Browse by Location') }}</h3>
                                <div class="space-y-2">
                                    @if ($cities->isNotEmpty())
                                        @foreach ($cities as $city)
                                            <a href="{{ route('web::events::filter', ['link' => $city->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $city->name }}</a>
                                        @endforeach
                                    @endif
                                    <a href="{{ route('web::events::filter', ['link' => 'cities']) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">All Cities</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-8 lg:hidden">
                <button @click="sidebarOpen = !sidebarOpen" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 dark:bg-gray-800 dark:text-white dark:ring-gray-600 dark:hover:bg-gray-700">
                    <svg class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m0 6h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m0 6h9.75M7.5 18a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0m-3.75 0H7.5" /></svg>
                    {{ __('Filters') }}
                </button>
            </div>
            <div class="hidden lg:block lg:col-span-3">
                <div class="sticky top-8 space-y-8">
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Browse by Category') }}</h3>
                        <div class="space-y-2">
                            @if (!empty($currentCategory->id) && empty($currentCategory->parent_id))
                                @php
                                if (LaravelLocalization::getCurrentLocale() != 'en') {
                                    $names = json_decode($currentCategory->name_translations, true);
                                    $name = $names[LaravelLocalization::getCurrentLocale()] ?? $currentCategory->name;
                                } else {
                                    $name = $currentCategory->name;
                                }
                                @endphp
                                <strong class="block text-sm text-gray-700 dark:text-gray-500">{{ $name }}</strong>
                            @elseif (!empty($currentCategory->id) && !empty($currentCategory->parent_id))
                                @php
                                if (LaravelLocalization::getCurrentLocale() != 'en') {
                                    $names = json_decode($allCategories[$currentCategory->parent_id]->name_translations, true);
                                    $name = $names[LaravelLocalization::getCurrentLocale()] ?? $allCategories[$currentCategory->parent_id]->name;
                                } else {
                                    $name = $allCategories[$currentCategory->parent_id]->name;
                                }
                                @endphp
                                <strong class="block text-sm text-gray-700 dark:text-gray-500">{{ $name }}</strong>
                            @endif
                            @if ($categories->isNotEmpty())
                                @foreach ($categories as $category)
                                    @php
                                    if (LaravelLocalization::getCurrentLocale() != 'en') {
                                        $names = json_decode($category->name_translations, true);
                                        $name = $names[LaravelLocalization::getCurrentLocale()] ?? $category->name;
                                    } else {
                                        $name = $category->name;
                                    }
                                    @endphp
                                    @if (!empty($currentCategory->id) && empty($currentCategory->parent_id))
                                        <a href="{{ route('web::events::filter::category', ['link' => $currentCategory->slug, 'category' => $category->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $name }}</a>
                                    @elseif (!empty($currentCategory->id) && !empty($currentCategory->parent_id))
                                        <a href="{{ route('web::events::filter::category', ['link' => $allCategories[$currentCategory->parent_id]->slug, 'category' => $category->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $name }}</a>
                                    @else
                                        <a href="{{ route('web::events::filter', ['link' => $category->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $name }}</a>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Browse by Location') }}</h3>
                        <div class="space-y-2">
                            @if ($cities->isNotEmpty())
                                @foreach ($cities as $city)
                                    <a href="{{ route('web::events::filter', ['link' => $city->slug]) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ $city->name }}</a>
                                @endforeach
                            @endif
                            <a href="{{ route('web::events::filter', ['link' => 'cities']) }}" class="block text-sm text-gray-600 dark:text-gray-400 hover:text-orange-500 dark:hover:text-orange-400 transition-colors">{{ __('All Cities') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:col-span-9">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <nav aria-label="Breadcrumb" class="flex">
                            <ol role="list" class="flex items-center space-x-4 mb-4">
                                <li>
                                    <div>
                                        <a href="{{ route('web::index') }}" class="text-gray-400 hover:text-gray-500 dark:text-gray-500 dark:hover:text-gray-300">
                                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0"><path d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                            <span class="sr-only">{{ __('Home') }}</span>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <div class="flex items-center">
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                        <a href="{{ route('web::events') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">{{ __('Events') }}</a>
                                    </div>
                                </li>
                                @if (Route::currentRouteName() == 'web::events::filter')
                                    @php
                                    $pages = array('events/online' => __('Online Events'), 'events/past' => __('Past Events'), 'events/free' => __('Free Events'), 'events/cities' => __('Choose City'));
                                    $isPage = null;
                                    foreach ($pages as $page => $pageName) {
                                        if (strpos($_SERVER['REQUEST_URI'], $page) !== false) {
                                            $isPage = $page;
                                            break;
                                        }
                                    }
                                    @endphp
                                    @if (!empty($isPage))
                                        <li>
                                            <div class="flex items-center">
                                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                                <a href="{{ route('web::events::filter', ['link' => str_replace('events/', '', $isPage)]) }}" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">{{ $pages[$isPage] }}</a>
                                            </div>
                                        </li>
                                    @elseif (!empty($currentCategory->id))
                                        <li>
                                            <div class="flex items-center">
                                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                                <a href="{{ route('web::events::filter', ['link' => $currentCategory->slug]) }}" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">{{ $currentCategory->name }}</a>
                                            </div>
                                        </li>
                                    @elseif (!empty($currentCity->id))
                                        <li>
                                            <div class="flex items-center">
                                                <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                                <a href="{{ route('web::events::filter', ['link' => $currentCity->slug]) }}" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">{{ $currentCity->name }}</a>
                                            </div>
                                        </li>
                                    @endif
                                @elseif (Route::currentRouteName() == 'web::events::filter::category')
                                    <li>
                                        <div class="flex items-center">
                                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                            <a href="{{ route('web::events::filter', ['link' => $allCategories[$currentCategory->parent_id]->slug]) }}" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">{{ $allCategories[$currentCategory->parent_id]->name }}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="flex items-center">
                                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 shrink-0 text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                            <a href="{{ route('web::events::filter::category', ['link' => $allCategories[$currentCategory->parent_id]->slug, 'category' => $currentCategory->slug]) }}" aria-current="page" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">{{ $currentCategory->name }}</a>
                                        </div>
                                    </li>
                                @endif
                            </ol>
                        </nav>
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white">{{ $meta->subtitle }}</h2>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ $meta->subnote }}</p>
                    </div>
                    {{--<div class="flex items-center gap-4">
                        <select class="rounded-md border-0 py-1.5 pl-3 pr-12 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-orange-500 sm:text-sm sm:leading-6 dark:bg-gray-800 dark:text-white dark:ring-gray-600">
                            <option>Recently Added</option>
                            <option>A &rarr; Z</option>
                            <option>Z &rarr; A</option>
                        </select>
                    </div>--}}
                </div>
                @if (!empty($allCities) && !empty($majorCities))
                    <section class="mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">{{ __('Major cities') }}</h2>
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            @if (!empty($majorCities) && $majorCities->isNotEmpty())
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-2">
                                    @php
                                    $totalCities = $majorCities->count();
                                    $itemsPerColumn = ceil($totalCities/4);
                                    $columns = $majorCities->chunk($itemsPerColumn);
                                    @endphp
                                    @foreach ($columns as $column)
                                        <div class="space-y-1">
                                            @foreach ($column as $city)
                                                <a href="{{ route('web::events::filter', ['link' => $city->slug]) }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline transition-colors">
                                                    {{ $city->name }}
                                                    @if (isset($city->region->name))
                                                        <span class="text-xs text-gray-500 ml-1">({{ $city->region->name }})</span>
                                                    @endif
                                                </a>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </section>
                    <section>
                        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">{{ __('All cities') }}</h2>
                        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                            @if (!empty($allCities) && $allCities->isNotEmpty())
                                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-x-8 gap-y-2">
                                    @php
                                    $totalCities = $allCities->count();
                                    $itemsPerColumn = ceil($totalCities/4);
                                    $columns = $allCities->chunk($itemsPerColumn);
                                    @endphp
                                    @foreach ($columns as $column)
                                        <div class="space-y-1">
                                            @foreach ($column as $city)
                                                <a href="{{ route('web::events::filter', ['link' => $city->slug]) }}" class="block text-sm text-blue-600 hover:text-blue-800 hover:underline transition-colors">
                                                    {{ $city->name }}
                                                    @if (isset($city->region->name))
                                                        <span class="text-xs text-gray-500 ml-1">({{ $city->region->name }})</span>
                                                    @endif
                                                </a>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </section>
                @else
                    <div class="bg-white shadow overflow-hidden sm:rounded-md dark:bg-gray-800">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            @if (!empty($events) && $events->isNotEmpty())
                                @foreach ($events as $event)
                                    <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8 dark:hover:bg-white/2.5">
                                        <div class="flex min-w-0 gap-x-4">
                                            <img src="{{ (!empty($event->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/events/' . substr($event->img, 0, 1) . '/' . substr($event->img, 0, 2) . '/' . substr($event->img, 0, 3) . '/th_' . $event->img : '/assets/images/no-image-icon.png') }}" alt="{{ $event->name }}" class="size-12 flex-none rounded-lg bg-gray-50 object-cover dark:bg-gray-800" />
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">
                                                    <a href="{{ route('web::event', $event->slug) }}">
                                                        <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                                        {{ $event->name }}
                                                    </a>
                                                </p>
                                                <p class="mt-1 text-xs/5 text-gray-500 dark:text-orange-400">
                                                    @php
                                                    $categories = '';
                                                    if (!empty($event->categories)) {
                                                        $categoryIDs = explode('][', trim($event->categories, '[]'));
                                                        if (!empty($categoryIDs)) {
                                                            foreach ($categoryIDs as $categoryID) {
                                                                if (!empty($allCategories[$categoryID]->parent_id)) {
                                                                    if (!empty($categories)) {
                                                                        $categories .= ', ';
                                                                    }
                                                                    $categories .= (!empty($allCategories[$categoryID]->parentCategory->name) ? $allCategories[$categoryID]->parentCategory->name . ' > ' : '') . $allCategories[$categoryID]->name;
                                                                }
                                                            }
                                                        }
                                                    }
                                                    @endphp
                                                    {{ (!empty($categories) ? $categories . ' • ' : '') }}{{ (!empty($event->is_online) ? __('Online') : (!empty($event->city->name) ? $event->city->name . (!empty($event->city->region->name) ? ', ' . $event->city->region->name : '') : __('Cyprus'))) }}
                                                </p>
                                                <div class="mt-2 flex items-center gap-x-4">
                                                    @if (date('Y-m-d', strtotime($event->start_date)) != date('Y-m-d', strtotime($event->end_date)))
                                                        <div class="flex items-center gap-x-1.5">
                                                            <svg class="size-4 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/></svg>
                                                            <p class="text-xs/5 text-gray-700 dark:text-gray-400">
                                                                {{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y H:i') }}
                                                                @if ($event->end_date)
                                                                    - {{ \Carbon\Carbon::parse($event->end_date)->format('M j, Y H:i') }}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    @else
                                                        <div class="flex items-center gap-x-1.5">
                                                            <svg class="size-4 text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/></svg>
                                                            <p class="text-xs/5 text-gray-700 dark:text-gray-400">
                                                                {{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y') }}
                                                            </p>
                                                        </div>
                                                        <div class="flex items-center gap-x-1.5">
                                                            <svg class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>
                                                            <p class="text-xs/5 text-gray-700 dark:text-gray-400">
                                                                {{ \Carbon\Carbon::parse($event->start_date)->format('H:i') }}
                                                                @if ($event->end_date)
                                                                    - {{ \Carbon\Carbon::parse($event->end_date)->format('H:i') }}
                                                                @endif
                                                            </p>
                                                        </div>
                                                    @endif
                                                    @if (!empty($event->location))
                                                        <div class="flex items-center gap-x-1.5">
                                                            <svg class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                                                            <p class="text-xs/5 text-gray-500 dark:text-gray-400">{{ Str::limit($event->location, 40) }}</p>
                                                        </div>
                                                    @endif
                                                </div>
                                                @if (!empty($event->languages))
                                                    <div class="mt-2 flex items-center gap-x-1">
                                                        @php
                                                        $languageIDs = explode('][', trim($event->languages, '[]'));
                                                        @endphp
                                                        @foreach ($languageIDs as $languageID)
                                                            @if (isset($allLanguages[$languageID]))
                                                                <span class="inline-flex items-center gap-x-1 rounded-full bg-blue-50 px-2 py-0.5 text-xs font-medium text-blue-700 dark:bg-blue-900/20 dark:text-blue-400"><img src="{{ asset('assets/flags/language/' . $languageID . '.svg') }}" alt="{{ $allLanguages[$languageID]['name'] }}" class="size-3 rounded-sm" />{{ $allLanguages[$languageID]['name'] }}</span>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="flex shrink-0 items-center gap-x-4">
                                            <div class="hidden sm:flex sm:flex-col sm:items-end">
                                                @php
                                                $eventDate = \Carbon\Carbon::parse($event->start_date);
                                                $now = \Carbon\Carbon::now();
                                                $isUpcoming = $eventDate->isFuture();
                                                $isPast = $eventDate->isPast();
                                                $isToday = $eventDate->isToday();
                                                @endphp
                                                <div class="flex items-center gap-x-1.5">
                                                    @if ($isToday)
                                                        <div class="flex-none rounded-full bg-blue-500/20 p-1 dark:bg-blue-500/30"><div class="size-1.5 rounded-full bg-blue-500"></div></div>
                                                        <p class="text-xs/5 text-blue-600 dark:text-blue-400 font-medium">{{ __('Today') }}</p>
                                                    @elseif ($isUpcoming)
                                                        <div class="flex-none rounded-full bg-emerald-500/20 p-1 dark:bg-emerald-500/30"><div class="size-1.5 rounded-full bg-emerald-500"></div></div>
                                                        <p class="text-xs/5 text-emerald-600 dark:text-emerald-400 font-medium">{{ __('Upcoming') }}</p>
                                                    @else
                                                        <div class="flex-none rounded-full bg-gray-500/20 p-1 dark:bg-gray-500/30"><div class="size-1.5 rounded-full bg-gray-500"></div></div>
                                                        <p class="text-xs/5 text-gray-500 dark:text-gray-400">{{ __('Past') }}</p>
                                                    @endif
                                                </div>
                                                @if (!empty($event->is_free))
                                                    <p class="mt-1 text-xs/5 font-semibold text-gray-900 dark:text-white">{{ __('Free') }}</p>
                                                @else
                                                    <p class="mt-1 text-xs/5 font-semibold text-gray-900 dark:text-white">
                                                        @if (empty($event->price))
                                                            {{ __('Free') }}
                                                        @else
                                                            €{{ number_format($event->price, 2) }}
                                                        @endif
                                                    </p>
                                                @endif
                                                {{--@if ($event->attendees_count)
                                                    <p class="mt-1 text-xs/5 text-gray-500 dark:text-gray-400">
                                                        {{ $event->attendees_count }} {{ __('attending') }}
                                                    </p>
                                                @endif--}}
                                            </div>
                                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 flex-none text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                        </div>
                                    </li>
                                @endforeach
                            @else
                                <li class="px-4 py-12 text-center">
                                    <svg class="mx-auto size-12 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z"/></svg>
                                    <h3 class="mt-2 text-sm font-semibold text-gray-900 dark:text-white">{{ __('No events found') }}</h3>
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">{{ __('Check back later for upcoming events or try different filters.') }}</p>
                                    <div class="mt-6">
                                        <a href="{{ route('signup') }}" class="inline-flex items-center rounded-md bg-orange-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">
                                            <svg class="-ml-0.5 mr-1.5 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" /></svg>
                                            {{ __('Submit Event') }}
                                        </a>
                                    </div>
                                </li>
                            @endif
                        </ul>
                    </div>
                @endif
                @if (!empty($events) && $events->isNotEmpty() && method_exists($events, 'links'))
                    <div class="mt-8">
                        {{ $events->links() }}
                    </div>
                @endif
                @if (!empty($meta->page_seo))
                    <section class="mt-8">
                        <div class="prose prose-sm max-w-none text-gray-700 dark:text-gray-300">
                            {!! $meta->page_seo !!}
                        </div>
                    </section>
                @endif
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <div class="mx-auto">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl dark:text-white">{{ __('Working afternoons in Cyprus!') }}</h2>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">{!! __('web.index_wan') !!} <a class="font-semibold text-orange-400" href="{{ route('web::wa') }}">{{ __('See the details') }}</a>.</p>
        </div>
        @if ($afternoons->isNotEmpty())
            @php
            $dows = [
                1 => __('Monday'),
                2 => __('Tuesday'),
                3 => __('Wednesday'),
                4 => __('Thursday'),
                5 => __('Friday'),
                6 => __('Saturday'),
                7 => __('Sunday')
            ];
            @endphp
            <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach($afternoons as $afternoon)
                    <li>
                        <img src="/assets/afternoons/{{ $afternoon->img }}" alt="{{ $afternoon->city->name }}" class="mx-auto size-56 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                        <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">{{ $afternoon->city->name }}</h3>
                        <p class="text-sm/6 text-gray-600 dark:text-gray-400">{{ $dows[$afternoon->dow] }}, {{ $afternoon->start_h }}:00 - {{ $afternoon->end_h }}:00</p>
                        <ul role="list" class="mt-6 flex justify-center gap-x-6">
                            <li>
                                <a href="{{ $afternoon->geo_link }}" target="_blank" class="text-gray-400 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300">
                                    <span class="sr-only">{{ __('Map') }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                                </a>
                            </li>
                            <li>
                                <a href="{{ $afternoon->chat_link }}" target="_blank" class="text-gray-400 hover:text-gray-500 dark:text-gray-400 dark:hover:text-gray-300">
                                    <span class="sr-only">{{ __('Chat') }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6"><path stroke-linecap="round" stroke-linejoin="round" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 0 1 .865-.501 48.172 48.172 0 0 0 3.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" /></svg>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@endsection
