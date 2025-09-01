@extends('layouts.layout')

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : __('SFC.CY'))) }}",
    "url": "{{ url()->current() }}",
    "description": "{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}",
    "isPartOf": {
        "@@type": "WebSite",
        "name": "{{ __('SFC.CY') }}",
        "url": "{{ route('web::index') }}"
    },
    "publisher": {
        "@@type": "Organization",
        "name": "{{ __('SFC.CY') }}"
    }
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
        "name": "{{ __('Ecosystem') }}",
        "item": "{{ url()->current() }}"
    }]
}
</script>
@endsection

@section('content')
<div class="relative isolate overflow-hidden pt-14">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-24 xl:px-24 dark:bg-gray-800/50 dark:after:pointer-events-none dark:after:absolute dark:after:inset-0 dark:after:inset-ring dark:after:inset-ring-white/10 dark:after:sm:rounded-3xl">
        <div class="mx-auto max-w-2xl text-center">
            <h1 class="text-4xl font-semibold tracking-tight text-balance text-white sm:text-6xl">{{ __('Cyprus Startup Ecosystem') }}</h1>
            <p class="mt-6 text-lg/8 text-gray-300">{{ __('web.ecosystem_1') }}</p>
        </div>
        <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25 dark:opacity-20"></div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Community') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Active Members') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_2') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Founders & Entrepreneurs') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_3') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.78552 9.5 12.7855 14l9-4.5-9-4.5-8.99998 4.5Zm0 0V17m3-6v6.2222c0 .3483 2 1.7778 5.99998 1.7778 4 0 6-1.3738 6-1.7778V11"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Mentors & Advisors') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_4') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m8 8-4 4 4 4m8 0 4-4-4-4m-2-3-4 14"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Tech Talent') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_5') }}</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Innovation') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Cyprus Startups') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_6') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="flex flex-col">
                <div class="flex-auto">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('FinTech & Blockchain') }}</h3>
                    <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_7') }}</p>
                </div>
                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 dark:bg-green-400/10 dark:text-green-400">{{ __('FinTech') }}</span>
                    <span class="inline-flex items-center rounded-md bg-blue-50 px-2 py-1 text-xs font-medium text-blue-700 dark:bg-blue-400/10 dark:text-blue-400">{{ __('Blockchain') }}</span>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex-auto">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('SaaS & Software') }}</h3>
                    <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_8') }}</p>
                </div>
                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="inline-flex items-center rounded-md bg-purple-50 px-2 py-1 text-xs font-medium text-purple-700 dark:bg-purple-400/10 dark:text-purple-400">{{ __('SaaS') }}</span>
                    <span class="inline-flex items-center rounded-md bg-indigo-50 px-2 py-1 text-xs font-medium text-indigo-700 dark:bg-indigo-400/10 dark:text-indigo-400">{{ __('B2B') }}</span>
                </div>
            </div>
            <div class="flex flex-col">
                <div class="flex-auto">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('E-commerce & MarTech') }}</h3>
                    <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_9') }}</p>
                </div>
                <div class="mt-6 flex flex-wrap gap-2">
                    <span class="inline-flex items-center rounded-md bg-orange-50 px-2 py-1 text-xs font-medium text-orange-700 dark:bg-orange-400/10 dark:text-orange-400">{{ __('E-commerce') }}</span>
                    <span class="inline-flex items-center rounded-md bg-pink-50 px-2 py-1 text-xs font-medium text-pink-700 dark:bg-pink-400/10 dark:text-pink-400">{{ __('MarTech') }}</span>
                </div>
            </div>
        </div>
        <div class="mt-16 text-center">
            <a href="{{ route('web::startups') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 dark:bg-indigo-500 dark:hover:bg-indigo-400">{{ __('Explore All Startups') }}</a>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Capital') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Investors & Funding') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_10') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="max-w-xl">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Venture Capital Firms') }}</h3>
                <p class="mt-4 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_11') }}</p>
                <div class="mt-8 space-y-6">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-gray-900 dark:text-white">{{ __('Local VCs') }}.</dt>
                        <dd class="inline text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_12') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-gray-900 dark:text-white">{{ __('Regional Funds') }}.</dt>
                        <dd class="inline text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_13') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-gray-900 dark:text-white">{{ __('Sector Specialists') }}.</dt>
                        <dd class="inline text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_14') }}</dd>
                    </div>
                </div>
            </div>
            <div class="max-w-xl">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Angel Investors & Networks') }}</h3>
                <p class="mt-4 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_15') }}</p>
                <div class="mt-8 space-y-6">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-gray-900 dark:text-white">{{ __('Successful Entrepreneurs') }}.</dt>
                        <dd class="inline text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_16') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-gray-900 dark:text-white">{{ __('Industry Veterans') }}.</dt>
                        <dd class="inline text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_17') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-gray-900 dark:text-white">{{ __('Angel Networks') }}.</dt>
                        <dd class="inline text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_18') }}</dd>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Support') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Professional Services') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_19') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Legal & Compliance') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_20') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.6 16.733c.234.269.548.456.895.534a1.4 1.4 0 0 0 1.75-.762c.172-.615-.446-1.287-1.242-1.481-.796-.194-1.41-.861-1.241-1.481a1.4 1.4 0 0 1 1.75-.762c.343.077.654.26.888.524m-1.358 4.017v.617m0-5.939v.725M4 15v4m3-6v6M6 8.5 10.5 5 14 7.5 18 4m0 0h-3.5M18 4v3m2 8a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Accounting & Finance') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_21') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7.171 12.906-2.153 6.411 2.672-.89 1.568 2.34 1.825-5.183m5.73-2.678 2.154 6.411-2.673-.89-1.568 2.34-1.825-5.183M9.165 4.3c.58.068 1.153-.17 1.515-.628a1.681 1.681 0 0 1 2.64 0 1.68 1.68 0 0 0 1.515.628 1.681 1.681 0 0 1 1.866 1.866c-.068.58.17 1.154.628 1.516a1.681 1.681 0 0 1 0 2.639 1.682 1.682 0 0 0-.628 1.515 1.681 1.681 0 0 1-1.866 1.866 1.681 1.681 0 0 0-1.516.628 1.681 1.681 0 0 1-2.639 0 1.681 1.681 0 0 0-1.515-.628 1.681 1.681 0 0 1-1.867-1.866 1.681 1.681 0 0 0-.627-1.515 1.681 1.681 0 0 1 0-2.64c.458-.361.696-.935.627-1.515A1.681 1.681 0 0 1 9.165 4.3ZM14 9a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Marketing & Creative') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_22') }}</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Connect') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Events & Networking') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_23') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-700">
                <div class="flex items-center gap-4">
                    <div class="flex size-12 items-center justify-center rounded-lg bg-orange-500">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Working Afternoons') }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Regular co-working sessions for founders') }}</p>
                    </div>
                </div>
                <p class="mt-4 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_24') }}</p>
                <a href="{{ route('web::wa') }}" class="mt-4 inline-flex items-center text-sm font-medium text-orange-600 hover:text-orange-500 dark:text-orange-400">
                    {{ __('Learn more') }}
                    <svg class="ml-1 size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-700">
                <div class="flex items-center gap-4">
                    <div class="flex size-12 items-center justify-center rounded-lg bg-indigo-600">
                        <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Community Events') }}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Networking, workshops, and conferences') }}</p>
                    </div>
                </div>
                <p class="mt-4 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_25') }}</p>
                <a href="{{ route('web::events') }}" class="mt-4 inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">
                    {{ __('View all events') }}
                    <svg class="ml-1 size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Infrastructure') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Startup Infrastructure') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_26') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-4">
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Business Incubators') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_27') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Accelerator Programs') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_28') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M16 19h4a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-2m-2.236-4a3 3 0 1 0 0-4M3 18v-1a3 3 0 0 1 3-3h4a3 3 0 0 1 3 3v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1Zm8-10a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Co-working Spaces') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_29') }}</p>
            </div>
            <div class="text-center">
                <div class="mx-auto flex size-16 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-900/20">
                    <svg class="size-8 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 9a3 3 0 0 1 3-3m-2 15h4m0-3c0-4.1 4-4.9 4-9A6 6 0 1 0 6 9c0 4 4 5 4 9h4Z"/>
                    </svg>
                </div>
                <h3 class="mt-6 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Innovation Hubs') }}</h3>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.ecosystem_30') }}</p>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Government') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Government Support') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_31') }}</p>
        </div>
        <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="relative overflow-hidden rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Startup Support Programs') }}</h3>
                <p class="mt-4 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_32') }}</p>
                <ul class="mt-6 space-y-3 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-center gap-3">
                        <svg class="size-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        {{ __('Startup Cyprus Initiative - National entrepreneurship program') }}
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="size-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        {{ __('Innovation Voucher Scheme - R&D support funding') }}
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="size-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        {{ __('Digital Agenda Cyprus - Technology advancement programs') }}
                    </li>
                </ul>
            </div>
            <div class="relative overflow-hidden rounded-2xl bg-white p-8 shadow-sm ring-1 ring-gray-200 dark:bg-gray-800 dark:ring-gray-700">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ __('Funding & Grants') }}</h3>
                <p class="mt-4 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_33') }}</p>
                <ul class="mt-6 space-y-3 text-sm text-gray-600 dark:text-gray-400">
                    <li class="flex items-center gap-3">
                        <svg class="size-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        {{ __('Horizon Europe Programme - EU research and innovation funding') }}
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="size-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        {{ __('Competitiveness & Innovation Program - SME development support') }}
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="size-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        {{ __('National Research Foundation - Scientific research grants') }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-16 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div>
                <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Communities') }}</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl dark:text-white">{{ __('Partner Communities') }}</p>
                <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_34') }}</p>
                <div class="mt-8 space-y-4">
                    <div class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="size-12 bg-blue-100 rounded-lg flex items-center justify-center dark:bg-blue-900/20">
                            <svg class="size-6 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900 dark:text-white">{{ __('Tech & Developer Communities') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Programming meetups, hackathons, and technical workshops') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="size-12 bg-pink-100 rounded-lg flex items-center justify-center dark:bg-pink-900/20">
                            <svg class="size-6 text-pink-600 dark:text-pink-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900 dark:text-white">{{ __('Women in Business') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Supporting female entrepreneurs and professionals') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4 p-4 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="size-12 bg-green-100 rounded-lg flex items-center justify-center dark:bg-green-900/20">
                            <svg class="size-6 text-green-600 dark:text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium text-gray-900 dark:text-white">{{ __('Industry Networks') }}</h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('Sector-specific business associations and professional groups') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Event Venues') }}</h2>
                <p class="mt-2 text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl dark:text-white">{{ __('Hosting Locations') }}</p>
                <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.ecosystem_35') }}</p>
                <div class="mt-8 grid grid-cols-1 gap-4 sm:grid-cols-2">
                    <div class="text-center p-6 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="mx-auto size-12 bg-indigo-100 rounded-lg flex items-center justify-center dark:bg-indigo-900/20">
                            <svg class="size-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 font-medium text-gray-900 dark:text-white">{{ __('Limassol') }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Corporate venues, hotels, and waterfront event spaces') }}</p>
                    </div>
                    <div class="text-center p-6 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="mx-auto size-12 bg-indigo-100 rounded-lg flex items-center justify-center dark:bg-indigo-900/20">
                            <svg class="size-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 font-medium text-gray-900 dark:text-white">{{ __('Nicosia') }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Business centers, conference facilities, and modern meeting spaces') }}</p>
                    </div>
                    <div class="text-center p-6 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="mx-auto size-12 bg-indigo-100 rounded-lg flex items-center justify-center dark:bg-indigo-900/20">
                            <svg class="size-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 font-medium text-gray-900 dark:text-white">{{ __('Paphos') }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Resort venues, cultural centers, and conference hotels') }}</p>
                    </div>
                    <div class="text-center p-6 border border-gray-200 rounded-lg dark:border-gray-700">
                        <div class="mx-auto size-12 bg-indigo-100 rounded-lg flex items-center justify-center dark:bg-indigo-900/20">
                            <svg class="size-6 text-indigo-600 dark:text-indigo-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <h3 class="mt-4 font-medium text-gray-900 dark:text-white">{{ __('Larnaca') }}</h3>
                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Airport proximity venues, co-working spaces, and community centers') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-indigo-600 dark:bg-indigo-700">
    <div class="px-6 py-16 sm:px-6 sm:py-24 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-white sm:text-5xl">{{ __('Join the Ecosystem') }}</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg/8 text-indigo-100">{{ __('web.ecosystem_36') }}</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('signup') }}" class="rounded-md bg-white px-3.5 py-2.5 text-sm font-semibold text-indigo-600 shadow-sm hover:bg-indigo-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">{{ __('Get Started') }}</a>
                <a href="{{ route('web::about') }}" class="text-sm/6 font-semibold text-white">{{ __('Learn more') }} <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </div>
</div>
@endsection
