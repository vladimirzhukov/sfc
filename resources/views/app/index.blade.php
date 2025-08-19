@extends('layouts.app')

@section('content')
<div class="space-y-12 mb-8">
    <div class="sm:flex sm:items-center">
        <div class="sm:flex-auto">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Startup Founders Community in Cyprus') }}</h1>
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('web.index_subheading') }}</p>
        </div>
    </div>
</div>
@if (empty(Auth::user()->profile->id))
    <div class="rounded-md bg-blue-50 p-4 mb-4">
        <div class="flex">
            <div class="shrink-0"><svg class="size-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd" /></svg></div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="text-sm text-blue-700">{{ __('app.index_profile_intro') }}</p>
                <p class="mt-3 text-sm md:mt-0 md:ml-6"><a href="{{ route('app::profile') }}" class="font-medium whitespace-nowrap text-blue-700 hover:text-blue-600">{{ __('Profile') }} <span aria-hidden="true"> &rarr;</span></a></p>
            </div>
        </div>
    </div>
@endif
<div class="divide-y divide-gray-200 overflow-hidden rounded-lg bg-gray-200 shadow-sm sm:grid sm:grid-cols-2 sm:divide-y-0 dark:divide-white/10 dark:bg-gray-900 dark:shadow-none dark:outline dark:-outline-offset-1 dark:outline-white/20">
    <div class="group relative rounded-tl-lg rounded-tr-lg border-gray-200 bg-gray-50 p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:rounded-tr-none sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b dark:border-white/10 dark:bg-gray-800/50 dark:focus-within:outline-indigo-500">
        <div>
            <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-700 dark:bg-indigo-500/10 dark:text-indigo-400">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01" /></svg>
            </span>
        </div>
        <div class="mt-8">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('app::startups') }}" class="focus:outline-hidden"><span aria-hidden="true" class="absolute inset-0"></span> {{ __('Startups') }}</a>
            </h3>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ __('app.index_startups') }}</p>
        </div>
        <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-200">
            <svg viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" /></svg>
        </span>
    </div>
    <div class="group relative border-gray-200 bg-gray-50 p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:rounded-tr-lg sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b dark:border-white/10 dark:bg-gray-800/50 dark:focus-within:outline-indigo-500">
        <div>
            <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-700 dark:bg-indigo-500/10 dark:text-indigo-400">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" /></svg>
            </span>
        </div>
        <div class="mt-8">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('app::business') }}" class="focus:outline-hidden"><span aria-hidden="true" class="absolute inset-0"></span> {{ __('Business') }}</a>
            </h3>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ __('app.index_business') }}</p>
        </div>
        <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-200">
            <svg viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" /></svg>
        </span>
    </div>
    <div class="group relative border-gray-200 bg-gray-50 p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b dark:border-white/10 dark:bg-gray-800/50 dark:focus-within:outline-indigo-500">
        <div>
            <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-700 dark:bg-indigo-500/10 dark:text-indigo-400">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11 9h6m-6 3h6m-6 3h6M6.996 9h.01m-.01 3h.01m-.01 3h.01M4 5h16a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" /></svg>
            </span>
        </div>
        <div class="mt-8">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('app::services') }}" class="focus:outline-hidden"><span aria-hidden="true" class="absolute inset-0"></span> {{ __('Services') }}</a>
            </h3>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ __('app.index_services') }}</p>
        </div>
        <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-200">
            <svg viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" /></svg>
        </span>
    </div>
    <div class="group relative border-gray-200 bg-gray-50 p-6 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600 sm:odd:not-nth-last-2:border-b sm:even:border-l sm:even:not-last:border-b dark:border-white/10 dark:bg-gray-800/50 dark:focus-within:outline-indigo-500">
        <div>
            <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-700 dark:bg-indigo-500/10 dark:text-indigo-400">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" /></svg>
            </span>
        </div>
        <div class="mt-8">
            <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                <a href="{{ route('app::events') }}" class="focus:outline-hidden"><span aria-hidden="true" class="absolute inset-0"></span> {{ __('Events') }}</a>
            </h3>
            <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{ __('app.index_events') }}</p>
        </div>
        <span aria-hidden="true" class="pointer-events-none absolute top-6 right-6 text-gray-300 group-hover:text-gray-400 dark:text-gray-500 dark:group-hover:text-gray-200">
            <svg viewBox="0 0 24 24" fill="currentColor" class="size-6"><path d="M20 4h1a1 1 0 00-1-1v1zm-1 12a1 1 0 102 0h-2zM8 3a1 1 0 000 2V3zM3.293 19.293a1 1 0 101.414 1.414l-1.414-1.414zM19 4v12h2V4h-2zm1-1H8v2h12V3zm-.707.293l-16 16 1.414 1.414 16-16-1.414-1.414z" /></svg>
        </span>
    </div>
</div>
@endsection
