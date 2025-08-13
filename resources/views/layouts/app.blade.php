<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ (!empty($meta->locale) ? $meta->locale : 'en') }}"{!! (in_array($meta->locale, array('ar', 'he', 'fa')) ? ' dir="rtl"' : '') !!}>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.8/dist/cdn.min.js"></script>
    <title>{{ (!empty($meta->metas[$meta->locale]->title) ? $meta->metas[$meta->locale]->title : (!empty($meta->metas['en']->title) ? $meta->metas['en']->title : 'SFC.CY')) }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}">
    <meta name="keywords" content="{{ (!empty($meta->metas[$meta->locale]->keywords) ? $meta->metas[$meta->locale]->keywords : (!empty($meta->metas['en']->keywords) ? $meta->metas['en']->keywords : '')) }}">
    <meta property="og:title" content="{{ (!empty($meta->metas[$meta->locale]->title) ? $meta->metas[$meta->locale]->title : (!empty($meta->metas['en']->title) ? $meta->metas['en']->title : 'SFC.CY')) }}">
    <meta property="og:description" content="{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}">
    <meta property="og:locale" content="{{ (!empty($meta->locale) ? $meta->locale : 'en') }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ (!empty($meta->image) ? $meta->image : 'https://sfccy.com/assets/images/wall.png') }}">
    <meta property="og:url" content="{{ str_replace('http://', 'https://', url()->current()) }}">
    <meta property="og:site_name" content="{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="{{ (!empty($meta->metas[$meta->locale]->title) ? $meta->metas[$meta->locale]->title : (!empty($meta->metas['en']->title) ? $meta->metas['en']->title : 'SFC.CY')) }}">
    <meta property="twitter:description" content="{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}">
    <meta property="twitter:image" content="{{ (!empty($meta->image) ? $meta->image : 'https://sfccy.com/assets/images/wall.png') }}">
    {{--<meta name="robots" content="noindex, nofollow">--}}
    <meta name="robots" content="index, follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="{{ str_replace('http://', 'https://', url()->current()) }}">
    <style>
    [x-cloak] { display: none !important; }
    </style>
    @yield('styles')
    @yield('ldbread')
</head>
<body class="h-full">
<div x-data="{ mobileMenuOpen: false, profileDropdownOpen: false, languagePopup: false }">
    <div class="relative z-50 lg:hidden" x-show="mobileMenuOpen" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-900/80" aria-hidden="true" @click="mobileMenuOpen = false"></div>
        <div class="fixed inset-0 flex">
            <div class="relative mr-16 rtl:mr-0 flex w-full max-w-xs flex-1">
                <div class="absolute top-0 left-full rtl:right-full rtl:pr-2 flex w-16 justify-center pt-5">
                    <button type="button" class="-m-2.5 p-2.5" @click="mobileMenuOpen = false">
                        <span class="sr-only">{{ __('Close menu') }}</span>
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                    <div class="flex h-16 shrink-0 items-center">
                        <a href="{{ route('web::index') }}"><img class="h-10 w-auto" src="/assets/images/logo_b.png" alt="{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}" /></a>
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li><a href="{{ route('app::index') }}" class="group flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::index') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold{{ ((Route::currentRouteName() != 'app::index') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::index') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg> {{ __('Dashboard') }}</a></li>
                                    {{--<li><a href="#" class="group flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::services') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold{{ ((Route::currentRouteName() != 'app::services') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::services') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/></svg> {{ __('Services') }}</a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::goods') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold{{ ((Route::currentRouteName() != 'app::goods') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::goods') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/></svg> {{ __('Goods') }}</a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" /></svg> Projects</a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg> Calendar</a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" /></svg> Documents</a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" /></svg> Reports</a></li>--}}
                                </ul>
                            </li>
                            {{--<li>
                                <div class="text-xs/6 font-semibold text-gray-400">{{ __('Education') }}</div>
                                <ul role="list" class="-mx-2 mt-2 space-y-1">
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">1</span><span class="truncate">{{ __('Basic Course') }}</span><span class="ml-auto items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">{{ __('Free') }}</span></a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">2</span><span class="truncate">{{ __('Professional Course') }}</span></a></li>
                                    <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">3</span><span class="truncate">{{ __('Expert Course') }}</span></a></li>
                                </ul>
                            </li>--}}
                            <li class="mt-auto"><a href="{{ route('app::profile') }}" class="group -mx-2 flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::profile') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold text-gray-700{{ ((Route::currentRouteName() != 'app::profile') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::profile') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg> {{ __('Settings') }}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r rtl:border-l border-gray-200 bg-white px-6 pb-4">
            <div class="flex h-16 shrink-0 items-center">
                <a href="{{ route('web::index') }}"><img class="h-10 w-auto" src="/assets/images/logo_b.png" alt="{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}" /></a>
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li><a href="{{ route('app::index') }}" class="group flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::index') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold{{ ((Route::currentRouteName() != 'app::index') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::index') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg> {{ __('Dashboard') }}</a></li>
                            {{--<li><a href="{{ route('app::services') }}" class="group flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::services') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold{{ ((Route::currentRouteName() != 'app::services') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::services') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/></svg> {{ __('Services') }}</a></li>
                            <li><a href="{{ route('app::goods') }}" class="group flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::goods') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold{{ ((Route::currentRouteName() != 'app::goods') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::goods') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10V6a3 3 0 0 1 3-3v0a3 3 0 0 1 3 3v4m3-2 .917 11.923A1 1 0 0 1 17.92 21H6.08a1 1 0 0 1-.997-1.077L6 8h12Z"/></svg> {{ __('Goods') }}</a></li>
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" /></svg> Projects</a></li>
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" /></svg> Calendar</a></li>
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" /></svg> Documents</a></li>
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" /></svg> Reports</a></li>--}}
                        </ul>
                    </li>
                    {{--<li>
                        <div class="text-xs/6 font-semibold text-gray-400">{{ __('Education') }}</div>
                        <ul role="list" class="-mx-2 mt-2 space-y-1">
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">1</span><span class="truncate">{{ __('Basic Course') }}</span><span class="ml-auto items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700">{{ __('Free') }}</span></a></li>
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">2</span><span class="truncate">{{ __('Professional Course') }}</span></a></li>
                            <li><a href="#" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold text-gray-700 hover:bg-gray-50 hover:text-indigo-600"><span class="flex size-6 shrink-0 items-center justify-center rounded-lg border border-gray-200 bg-white text-[0.625rem] font-medium text-gray-400 group-hover:border-indigo-600 group-hover:text-indigo-600">3</span><span class="truncate">{{ __('Expert Course') }}</span></a></li>
                        </ul>
                    </li>--}}
                    <li class="mt-auto"><a href="{{ route('app::profile') }}" class="group -mx-2 flex gap-x-3 rounded-md{{ ((Route::currentRouteName() != 'app::profile') ? ' hover:bg-gray-50' : ' bg-gray-50') }} p-2 text-sm/6 font-semibold text-gray-700{{ ((Route::currentRouteName() != 'app::profile') ? ' hover:text-indigo-600' : ' text-indigo-600') }}"><svg class="size-6 shrink-0{{ ((Route::currentRouteName() != 'app::profile') ? ' hover:text-indigo-600' : ' text-indigo-600') }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg> {{ __('Settings') }}</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="lg:pl-72 rtl:lg:pr-72 rtl:lg:pl-0">
        <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-xs sm:gap-x-6 sm:px-6 lg:px-8">
            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="mobileMenuOpen = true">
                <span class="sr-only">{{ __('Open menu') }}</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" /></svg>
            </button>
            <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>
            <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                <form class="grid flex-1 grid-cols-1" action="#" method="GET">
                    {{--<input type="search" name="search" aria-label="Search" class="col-start-1 row-start-1 block size-full bg-white pl-8 text-base text-gray-900 outline-hidden placeholder:text-gray-400 sm:text-sm/6" placeholder="Search" />
                    <svg class="pointer-events-none col-start-1 row-start-1 size-5 self-center text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" /></svg>--}}
                </form>
                <div class="flex items-center gap-x-4 lg:gap-x-6">
                    <a @click="languagePopup = true" href="javascript:void(0);" class="-mx-3 block rounded-lg px-3 py-2 text-sm/6 font-semibold text-gray-900 hover:bg-gray-50"><img class="mr-1 rtl:ml-1 rtl:mr-0 inline-block" src="/assets/flags/language/{{ $meta->locale }}.svg" width="24"> {{ strtoupper(!empty($meta->locale) ? $meta->locale : 'en') }} ({{ (!empty($meta->language) ? $meta->language : '') }})</a>
                    <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>
                    <div class="relative">
                        <button type="button" class="relative flex items-center" id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="profileDropdownOpen = !profileDropdownOpen">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">{{ __('Open menu') }}</span>
                            <img class="size-8 rounded-full bg-gray-50 user-avatar" src="{{ (!empty(Auth::user()->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr(Auth::user()->img, 0, 1) . '/' . substr(Auth::user()->img, 0, 2) . '/' . substr(Auth::user()->img, 0, 3) . '/th_' . Auth::user()->img : '/assets/images/no-user-image-icon.png') }}" alt="" />
                            <span class="hidden lg:flex lg:items-center">
                                <span class="ml-4 rtl:ml-0 rtl:mr-4 text-sm/6 font-semibold text-gray-900" aria-hidden="true">{{ Auth::user()->email }}</span>
                                <svg class="ml-2 rtl:ml-0 rtl:mr-2 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" /></svg>
                            </span>
                        </button>
                        <div class="absolute ltr:right-0 rtl:left-0 z-10 mt-2.5 w-32 ltr:origin-top-right rtl:origin-top-left rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-hidden" x-show="profileDropdownOpen" @click.away="profileDropdownOpen = false" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                            <a href="{{ route('app::profile') }}" class="block px-3 py-1 text-sm/6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-0">{{ __('Profile') }}</a>
                            <a href="{{ route('logout') }}" class="block px-3 py-1 text-sm/6 text-gray-900" role="menuitem" tabindex="-1" id="user-menu-item-1">{{ __('Logout') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="py-10">
            <div class="px-4 sm:px-6 lg:px-8">
                @yield('content')
            </div>
        </main>
    </div>
    <div x-show="languagePopup" x-cloak x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="relative z-[55]" aria-labelledby="dialog-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true" @click="languagePopup = false"></div>
        <div @click="languagePopup = false" class="fixed inset-0 z-[55] w-screen overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:items-center sm:p-0">
                <div x-show="languagePopup" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100" x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95" class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">
                    <div>
                        <div class="max-h-60 overflow-y-auto border border-gray-200 rounded-lg">
                            <div class="divide-y divide-gray-100">
                                @php
                                $languages = $meta->languages;
                                ksort($languages);
                                @endphp
                                @foreach ($languages as $key => $item)
                                    <a class="dropdown-item flex items-center px-4 py-3 text-sm text-gray-700 hover:bg-gray-50 transition-colors duration-150" hreflang="{{ $key }}" href="{{ (($key != 'en') ? LaravelLocalization::getLocalizedURL($key) : '/en' . ((LaravelLocalization::getCurrentLocale() != 'en') ? substr($_SERVER['REQUEST_URI'], 3) : $_SERVER['REQUEST_URI'])) }}" rel="alternate"><img class="mr-3 inline-block" src="/assets/flags/language/{{ $key }}.svg" alt="{{ strtoupper($key) }} ({{ $item['name'] }})" width="24"><span class="rtl:mr-2 font-medium">{{ strtoupper($key) }}</span><span class="ml-2 rtl:ml-0 rtl:mr-2 text-gray-500">({{ $item['native'] }})</span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 sm:mt-6 space-y-3">
                        <button @click="languagePopup = false" type="button" class="inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 cursor-pointer hover:bg-gray-50">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@yield('js')
</body>
</html>
