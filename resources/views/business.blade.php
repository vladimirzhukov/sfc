@extends('layouts.layout')

@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
@endsection

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Organization",
    "name": "{{ $business->name }}",
    "description": "{{ strip_tags($business->description) }}",
    "url": "{{ $business->link ?? route('web::business', $business->slug) }}",
    @if ($business->img)
        "logo": "https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/business/{{ substr($business->img, 0, 1) }}/{{ substr($business->img, 0, 2) }}/{{ substr($business->img, 0, 3) }}/{{ $business->img }}",
    @endif
    @if (!$business->is_online && $business->city)
    "address": {
        "@@type": "PostalAddress",
        "addressLocality": "{{ $business->city->name }}",
        "addressCountry": "CY"
    },
    @endif
    @if ($business->lat && $business->lon)
    "geo": {
        "@@type": "GeoCoordinates",
        "latitude": {{ $business->lat }},
        "longitude": {{ $business->lon }}
    },
    @endif
    "sameAs": [
        "{{ route('web::business', $business->slug) }}"
    @if ($business->link)
    ,"{{ $business->link }}"
    @endif
    ]
}
</script>
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [{
        "@@type": "ListItem",
        "position": 1,
        "name": "{{ __('Home') }}",
        "item": "{{ route('web::index') }}"
    },{
        "@@type": "ListItem",
        "position": 2,
        "name": "{{ __('Businesses') }}",
        "item": "{{ route('web::businesses') }}"
    },{
        "@@type": "ListItem",
        "position": 3,
        "name": "{{ $business->name }}",
        "item": "{{ url()->current() }}"
    }]
}
</script>
@endsection

@section('content')
<div class="relative isolate overflow-hidden pt-14">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-16 sm:py-20 lg:py-28">
        <div class="mx-auto max-w-4xl">
            <nav aria-label="Breadcrumb" class="flex mb-8">
                <ol role="list" class="flex items-center space-x-4">
                    <li>
                        <div>
                            <a href="{{ route('web::index') }}" class="text-gray-400 hover:text-gray-300">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0"><path d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                                <span class="sr-only">{{ __('Home') }}</span>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-gray-400"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                            <a href="{{ route('web::businesses') }}" class="ml-4 text-sm font-medium text-gray-400 hover:text-gray-300">{{ __('Businesses') }}</a>
                        </div>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-gray-400"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                            <span class="ml-4 text-sm font-medium text-gray-500" aria-current="page">{{ Str::limit($business->name, 30) }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="mb-6">
                <span class="inline-flex items-center gap-x-1.5 rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800">
                    <div class="flex-none rounded-full bg-green-500 p-1"><div class="size-1.5 rounded-full bg-white"></div></div>
                    {{ __('Active Business') }}
                </span>
            </div>
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">{{ $business->name }}</h1>
            <div class="mt-8 space-y-4">
                <div class="flex items-center text-lg text-gray-300">
                    <svg class="size-6 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                    @if ($business->is_online)
                        {{ __('Online Business') }}
                    @else
                        {{ $business->location ?? ($business->city->name ?? __('Cyprus')) }}
                    @endif
                </div>
                @if (!empty($business->languages))
                    <div class="flex items-center text-lg text-gray-300">
                        <svg class="size-6 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" /></svg>
                        @php
                        $allLanguages = config('languages.locales');
                        $languageIDs = explode('][', trim($business->languages, '[]'));
                        $languageNames = [];
                        foreach ($languageIDs as $languageID) {
                            if (isset($allLanguages[$languageID])) {
                                $languageNames[] = $allLanguages[$languageID]['name'];
                            }
                        }
                        @endphp
                        {{ __('Languages') }}: {{ implode(', ', $languageNames) }}
                    </div>
                @endif
            </div>
            <div class="mt-10 flex flex-wrap gap-4">
                @if ($business->link)
                    <a href="{{ $business->link }}" target="_blank" rel="noopener noreferrer" class="rounded-md bg-orange-500 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">
                        {{ __('Visit Website') }}
                        <svg class="ml-2 -mr-1 size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" /></svg>
                    </a>
                @endif
                <button id="shareButton" class="rounded-md bg-white/10 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('Share') }}</button>
            </div>
        </div>
        <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25"></div>
        </div>
    </div>
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <div class="lg:col-span-8">
                    <div class="prose prose-lg max-w-none">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('About this Business') }}</h2>
                        @if ($business->description_html)
                            {!! $business->description_html !!}
                        @elseif ($business->description)
                            <p class="text-gray-700 leading-relaxed">{!! nl2br(e($business->description)) !!}</p>
                        @else
                            <p class="text-gray-500 italic">{{ __('No description available for this business.') }}</p>
                        @endif
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mt-8 mb-4">{{ __('Business Details') }}</h3>
                    <dl class="space-y-4">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">{{ __('Location') }}</dt>
                            <dd class="mt-1 text-sm text-gray-900">
                                @if ($business->is_online)
                                    {{ __('Online Business') }}
                                @else
                                    {{ $business->location ?? ($business->city->name ?? __('Cyprus')) }}
                                @endif
                            </dd>
                        </div>
                        @if (!empty($business->city))
                            <div>
                                <dt class="text-sm font-medium text-gray-500">{{ __('City') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900">{{ $business->city->name }}</dd>
                            </div>
                        @endif
                        @if (!empty($business->languages))
                            <div>
                                <dt class="text-sm font-medium text-gray-500">{{ __('Languages Supported') }}</dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    @php
                                    $languageNames = [];
                                    foreach ($languageIDs as $languageID) {
                                        if (isset($allLanguages[$languageID])) {
                                            $languageNames[] = $allLanguages[$languageID]['name'];
                                        }
                                    }
                                    @endphp
                                    {{ implode(', ', $languageNames) }}
                                </dd>
                            </div>
                        @endif
                    </dl>
                    @if (!empty($business->categories))
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Categories') }}</h3>
                            <div class="flex flex-wrap gap-2">
                                @php
                                $categoryIDs = explode('][', trim($business->categories, '[]'));
                                @endphp
                                @foreach ($categoryIDs as $categoryID)
                                    @if (!empty($allCategories[$categoryID]))
                                        <span class="inline-flex items-center rounded-full bg-blue-50 px-3 py-1 text-sm font-medium text-blue-700">
                                            {{ $allCategories[$categoryID]->name }}
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if (!empty($business->languages))
                        <div class="mt-8">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Languages') }}</h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach ($languageIDs as $languageID)
                                    @if (isset($allLanguages[$languageID]))
                                        <span class="inline-flex items-center gap-x-1 rounded-full bg-gray-50 px-3 py-1 text-sm font-medium text-gray-700">
                                            <img src="{{ asset('assets/flags/language/' . $languageID . '.svg') }}" alt="{{ $allLanguages[$languageID]['name'] }}" class="size-4 rounded-sm">
                                            {{ $allLanguages[$languageID]['name'] }}
                                        </span>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="mt-12 lg:mt-0 lg:col-span-4">
                    <div class="sticky top-8 space-y-6">
                        @if ($business->img)
                            <div class="bg-gray-50 rounded-lg p-6">
                                <img src="https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/business/{{ substr($business->img, 0, 1) }}/{{ substr($business->img, 0, 2) }}/{{ substr($business->img, 0, 3) }}/{{ $business->img }}" alt="{{ $business->name }}" class="w-full object-contain rounded-lg shadow-lg max-h-48">
                            </div>
                        @endif
                        @if (!$business->is_online && $business->lat && $business->lon)
                            <div class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Location') }}</h3>
                                <div id="map" class="h-48 rounded-md overflow-hidden bg-gray-200"></div>
                                <p class="mt-2 text-sm text-gray-600">{{ $business->location }}</p>
                            </div>
                        @endif
                        @if (!empty($business->user->profile->id))
                            <div class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Business Owner') }}</h3>
                                <div class="flex items-center space-x-3">
                                    @if ($business->user->img)
                                        <img src="{{ (!empty($business->user->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr($business->user->img, 0, 1) . '/' . substr($business->user->img, 0, 2) . '/' . substr($business->user->img, 0, 3) . '/th_' . $business->user->img : '/assets/images/no-user-image-icon.png') }}" alt="{{ trim($business->user->profile->first_name . ' '. $business->user->profile->last_name) }}" class="size-10 rounded-full">
                                    @else
                                        <div class="size-10 bg-gray-300 rounded-full flex items-center justify-center">
                                            <svg class="size-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
                                        </div>
                                    @endif
                                    <div>
                                        <p class="font-medium text-gray-900">{{ trim($business->user->profile->first_name . ' '. $business->user->profile->last_name) }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="bg-gray-50 rounded-lg p-6">
                            <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Share this Business') }}</h3>
                            <div class="flex space-x-3">
                                <a href="#" id="facebook-share" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center size-10 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" /></svg>
                                </a>
                                <a href="#" id="twitter-share" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center size-10 bg-sky-500 text-white rounded-md hover:bg-sky-600 transition-colors">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"><path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" /></svg>
                                </a>
                                <a href="#" id="whatsapp-share" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center size-10 bg-green-600 text-white rounded-md hover:bg-green-700 transition-colors">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" /></svg>
                                </a>
                                <button id="copy-link-btn" class="flex items-center justify-center size-10 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition-colors">
                                    <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" /></svg>
                                </button>
                                <a href="#" id="linkedin-share" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center size-10 bg-blue-800 text-white rounded-md hover:bg-blue-900 transition-colors">
                                    <svg class="size-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@if (!empty($relatedBusinesses) && $relatedBusinesses->isNotEmpty())
<div class="bg-gray-100 py-16 sm:py-24 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('Related Businesses') }}</h2>
        </div>
        <div class="bg-white shadow overflow-hidden sm:rounded-md dark:bg-gray-800">
            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($relatedBusinesses as $relatedBusiness)
                    <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8 dark:hover:bg-white/2.5">
                        <div class="flex min-w-0 gap-x-4">
                            <img src="{{ (!empty($relatedBusiness->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/business/' . substr($relatedBusiness->img, 0, 1) . '/' . substr($relatedBusiness->img, 0, 2) . '/' . substr($relatedBusiness->img, 0, 3) . '/th_' . $relatedBusiness->img : '/assets/images/no-image-icon.png') }}" alt="{{ $relatedBusiness->name }}" class="size-12 flex-none rounded-lg bg-gray-50 object-cover dark:bg-gray-800" />
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm/6 font-semibold text-gray-900 dark:text-white">
                                    <a href="{{ route('web::business', $relatedBusiness->slug) }}">
                                        <span class="absolute inset-x-0 -top-px bottom-0"></span>
                                        {{ $relatedBusiness->name }}
                                    </a>
                                </p>
                                <p class="mt-1 text-xs/5 text-gray-500 dark:text-orange-400">
                                    @php
                                    $categories = '';
                                    if (!empty($relatedBusiness->categories)) {
                                        $categoryIDs = explode('][', trim($relatedBusiness->categories, '[]'));
                                        if (!empty($categoryIDs)) {
                                            foreach ($categoryIDs as $categoryID) {
                                                if (!empty($allCategories[$categoryID]) && !empty($allCategories[$categoryID]->parent_id)) {
                                                    if (!empty($categories)) {
                                                        $categories .= ', ';
                                                    }
                                                    $categories .= (!empty($allCategories[$categoryID]->parentCategory->name) ? $allCategories[$categoryID]->parentCategory->name . ' > ' : '') . $allCategories[$categoryID]->name;
                                                }
                                            }
                                        }
                                    }
                                    @endphp
                                    {{ (!empty($categories) ? $categories . ' • ' : '') }}{{ (!empty($relatedBusiness->is_online) ? __('Online') : (!empty($relatedBusiness->city->name) ? $relatedBusiness->city->name . (!empty($relatedBusiness->city->region->name) ? ', ' . $relatedBusiness->city->region->name : '') : __('Cyprus'))) }}
                                </p>
                                @if (!empty($relatedBusiness->description))
                                    <p class="mt-2 text-sm/6 text-gray-600 dark:text-gray-300">{{ Str::limit($relatedBusiness->description, 120) }}</p>
                                @endif
                                @if (!empty($relatedBusiness->location))
                                    <div class="flex items-center gap-x-1.5 mt-2">
                                        <svg class="size-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" /></svg>
                                        <p class="text-xs/5 text-gray-500 dark:text-gray-400">{{ Str::limit($relatedBusiness->location, 40) }}</p>
                                    </div>
                                @endif
                                @if (!empty($relatedBusiness->languages))
                                    <div class="mt-2 flex items-center gap-x-1">
                                        @php
                                        $relatedLanguageIDs = explode('][', trim($relatedBusiness->languages, '[]'));
                                        $allLanguages = config('languages.locales');
                                        @endphp
                                        @foreach ($relatedLanguageIDs as $languageID)
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
                                <div class="flex items-center gap-x-1.5">
                                    <div class="flex-none rounded-full bg-emerald-500/20 p-1 dark:bg-emerald-500/30">
                                        <div class="size-1.5 rounded-full bg-emerald-500"></div>
                                    </div>
                                    <p class="text-xs/5 text-emerald-600 dark:text-emerald-400 font-medium">{{ __('Active') }}</p>
                                </div>
                            </div>
                            <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 flex-none text-gray-400 dark:text-gray-500"><path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" /></svg>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
@endsection

@section('js')
@if (!$business->is_online && $business->lat && $business->lon)
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
@endif
<script>
document.addEventListener('DOMContentLoaded', function() {
    @if (!$business->is_online && $business->lat && $business->lon)
    if (typeof L !== 'undefined') {
        const map = L.map('map', {
            center: [{{ $business->lat }}, {{ $business->lon }}],
            zoom: 15,
            scrollWheelZoom: false
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([{{ $business->lat }}, {{ $business->lon }}])
            .addTo(map)
            .bindPopup('{{ addslashes($business->location ?? $business->name) }}');
    }
    @endif

    const shareBtn = document.getElementById('shareButton');
    if (shareBtn) {
        shareBtn.addEventListener('click', function() {
            const shareData = {
                title: {!! json_encode($business->name) !!},
                text: {!! json_encode(Str::limit(strip_tags($business->description ?? ''), 100)) !!},
                url: window.location.href
            };
            if (navigator.share) {
                navigator.share(shareData).catch((error) => {
                    console.log('Error sharing:', error);
                    showShareModal();
                });
            } else {
                showShareModal();
            }
        });
    }
    setupSocialShareLinks();
});

function showShareModal() {
    // Create and show a custom share modal
    const modal = document.createElement('div');
    modal.className = 'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50';
    modal.innerHTML = `
<div class="bg-white rounded-lg p-6 max-w-sm mx-4 w-full">
    <div class="flex justify-between items-center mb-4">
        <h3 class="text-lg font-semibold text-gray-900">{{ __('Share this Business') }}</h3>
        <button onclick="this.closest('.fixed').remove()" class="text-gray-400 hover:text-gray-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>
    <div class="space-y-3">
        <button onclick="copyToClipboard('${window.location.href}'); this.textContent='Copied!'; setTimeout(() => this.textContent='Copy Link', 2000)" class="w-full flex items-center justify-center px-4 py-2 bg-gray-100 hover:bg-gray-200 rounded-md text-gray-700 font-medium">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
            </svg>
            {{ __('Copy Link') }}
    </button>
</div>
</div>`;
    document.body.appendChild(modal);

    // Close modal when clicking outside
    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.remove();
        }
    });
}

function copyToClipboard(text) {
    if (navigator.clipboard) {
        navigator.clipboard.writeText(text);
    } else {
        // Fallback for older browsers
        const textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
    }
}

function setupSocialShareLinks() {
    const businessTitle = {!! json_encode($business->name) !!};
    const businessDescription = {!! json_encode(Str::limit(strip_tags($business->description ?? ''), 100)) !!};
    const businessUrl = window.location.href;

    // Facebook share
    const facebookBtn = document.getElementById('facebook-share');
    if (facebookBtn) {
        facebookBtn.href = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(businessUrl)}`;
    }

    // Twitter share
    const twitterBtn = document.getElementById('twitter-share');
    if (twitterBtn) {
        const tweetText = businessTitle + ' - Cyprus Business';
        twitterBtn.href = `https://twitter.com/intent/tweet?text=${encodeURIComponent(tweetText)}&url=${encodeURIComponent(businessUrl)}`;
    }

    // WhatsApp share
    const whatsappBtn = document.getElementById('whatsapp-share');
    if (whatsappBtn) {
        const whatsappText = `Check out this business: ${businessTitle} ${businessUrl}`;
        whatsappBtn.href = `https://wa.me/?text=${encodeURIComponent(whatsappText)}`;
    }

    // LinkedIn share
    const linkedinBtn = document.getElementById('linkedin-share');
    if (linkedinBtn) {
        linkedinBtn.href = `https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(businessUrl)}`;
    }

    // Copy link button
    const copyBtn = document.getElementById('copy-link-btn');
    if (copyBtn) {
        copyBtn.addEventListener('click', function() {
            copyToClipboard(businessUrl);

            // Show feedback
            const originalHTML = this.innerHTML;
            this.innerHTML = `<svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>`;
            this.classList.remove('hover:bg-gray-700', 'bg-gray-600');
            this.classList.add('bg-green-600', 'hover:bg-green-700');

            setTimeout(() => {
                this.innerHTML = originalHTML;
                this.classList.remove('bg-green-600', 'hover:bg-green-700');
                this.classList.add('bg-gray-600', 'hover:bg-gray-700');
            }, 2000);
        });
    }
}
</script>
@endsection
