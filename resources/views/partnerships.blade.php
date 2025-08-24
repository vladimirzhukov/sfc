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
        "name": "{{ __('Partnerships') }}",
        "item": "{{ url()->current() }}"
    }]
}
</script>
@endsection

@section('content')
<div class="relative isolate overflow-hidden pt-14">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-24 xl:px-24 dark:bg-gray-800/50 dark:after:pointer-events-none dark:after:absolute dark:after:inset-0 dark:after:inset-ring dark:after:inset-ring-white/10 dark:after:sm:rounded-3xl">
        <div class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-2 lg:items-center lg:gap-y-0">
            <div class="lg:row-start-2 lg:max-w-md">
                <h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">{{ __('web.partnerships_1') }}</h2>
                <p class="mt-6 text-lg/8 text-gray-300">{{ __('web.partnerships_2') }}</p>
            </div>
            <img width="1500" height="1002" src="/assets/images/partnerships.jpg" alt="{{ __('Partnership Network') }}" class="relative -z-20 max-w-xl min-w-full rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-5xl lg:max-w-none" />
            <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10 dark:lg:border-white/10">
                <dl class="max-w-xl space-y-8 text-base/7 text-gray-300 lg:max-w-none">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('web.partnerships_3') }}</dt>
                        <dd class="inline">{{ __('web.partnerships_4') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('web.partnerships_5') }}</dt>
                        <dd class="inline">{{ __('web.partnerships_6') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('web.partnerships_7') }}</dt>
                        <dd class="inline">{{ __('web.partnerships_8') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25 dark:opacity-20"></div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-24 sm:py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Join our ecosystem') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">{{ __('web.partnerships_9') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.partnerships_10') }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-5 flex-none text-indigo-600 dark:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L8.179 10.5a.75.75 0 00-1.358.668l1.723 3.5a.75.75 0 001.357-.067l3.857-5.5z" clip-rule="evenodd" />
                        </svg>
                        {{ __('web.partnerships_11') }}
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.partnerships_12') }}</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-5 flex-none text-indigo-600 dark:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L8.179 10.5a.75.75 0 00-1.358.668l1.723 3.5a.75.75 0 001.357-.067l3.857-5.5z" clip-rule="evenodd" />
                        </svg>
                        {{ __('web.partnerships_13') }}
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.partnerships_14') }}</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-5 flex-none text-indigo-600 dark:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L8.179 10.5a.75.75 0 00-1.358.668l1.723 3.5a.75.75 0 001.357-.067l3.857-5.5z" clip-rule="evenodd" />
                        </svg>
                        {{ __('web.partnerships_15') }}
                    </dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.partnerships_16') }}</p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
<div class="bg-white py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <div class="mx-auto">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl dark:text-white">{{ __('Who can become our partner?') }}</h2>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">{!! __('web.partnerships_who_text') !!}</p>
        </div>
        <div class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 dark:bg-gray-800">
                <div>
                <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-600 ring-4 ring-white dark:bg-indigo-500/10 dark:text-indigo-400">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                    </svg>
                </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        {{ __('web.partnerships_type_1') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_type_1_desc') }}
                    </p>
                </div>
            </div>
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 dark:bg-gray-800">
                <div>
                <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-600 ring-4 ring-white dark:bg-indigo-500/10 dark:text-indigo-400">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m10.051 8.102-3.778.322-1.994 1.994a.94.94 0 0 0 .533 1.6l2.698.316m8.39 1.617-.322 3.78-1.994 1.994a.94.94 0 0 1-1.595-.533l-.4-2.652m8.166-11.174a1.366 1.366 0 0 0-1.12-1.12c-1.616-.279-4.906-.623-6.38.853-1.671 1.672-5.211 8.015-6.31 10.023a.932.932 0 0 0 .162 1.111l.828.835.833.832a.932.932 0 0 0 1.111.163c2.008-1.102 8.35-4.642 10.021-6.312 1.475-1.478 1.133-4.77.855-6.385Zm-2.961 3.722a1.88 1.88 0 1 1-3.76 0 1.88 1.88 0 0 1 3.76 0Z" />
                    </svg>
                </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        {{ __('web.partnerships_type_2') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_type_2_desc') }}
                    </p>
                </div>
            </div>
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 dark:bg-gray-800">
                <div>
                <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-600 ring-4 ring-white dark:bg-indigo-500/10 dark:text-indigo-400">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        {{ __('web.partnerships_type_3') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_type_3_desc') }}
                    </p>
                </div>
            </div>
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 dark:bg-gray-800">
                <div>
                <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-600 ring-4 ring-white dark:bg-indigo-500/10 dark:text-indigo-400">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.78552 9.5 12.7855 14l9-4.5-9-4.5-8.99998 4.5Zm0 0V17m3-6v6.2222c0 .3483 2 1.7778 5.99998 1.7778 4 0 6-1.3738 6-1.7778V11" />
                    </svg>
                </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        {{ __('web.partnerships_type_4') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_type_4_desc') }}
                    </p>
                </div>
            </div>
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 dark:bg-gray-800">
                <div>
                <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-600 ring-4 ring-white dark:bg-indigo-500/10 dark:text-indigo-400">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
                    </svg>
                </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        {{ __('web.partnerships_type_5') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_type_5_desc') }}
                    </p>
                </div>
            </div>
            <div class="group relative bg-white p-6 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-500 dark:bg-gray-800">
                <div>
                <span class="inline-flex rounded-lg bg-indigo-50 p-3 text-indigo-600 ring-4 ring-white dark:bg-indigo-500/10 dark:text-indigo-400">
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                    </svg>
                </span>
                </div>
                <div class="mt-8">
                    <h3 class="text-base font-semibold text-gray-900 dark:text-white">
                        {{ __('web.partnerships_type_6') }}
                    </h3>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_type_6_desc') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-24 sm:py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Partnership Benefits') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">{{ __('web.partnerships_benefits_title') }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-2">
                <div class="relative">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4.5V19a1 1 0 0 0 1 1h15M7 14l4-4 4 4 5-5m0 0h-3.207M20 9v3.207"/>
                        </svg>
                        {{ __('web.partnerships_benefit_1') }}
                    </dt>
                    <dd class="mt-4 text-base/7 text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_benefit_1_desc') }}
                    </dd>
                </div>
                <div class="relative">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6H5m2 3H5m2 3H5m2 3H5m2 3H5m11-1a2 2 0 0 0-2-2h-2a2 2 0 0 0-2 2M7 3h11a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1Zm8 7a2 2 0 1 1-4 0 2 2 0 0 1 4 0Z"/>
                        </svg>
                        {{ __('web.partnerships_benefit_2') }}
                    </dt>
                    <dd class="mt-4 text-base/7 text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_benefit_2_desc') }}
                    </dd>
                </div>
                <div class="relative">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 0 0-2 2v4m5-6h8M8 7V5a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2m0 0h3a2 2 0 0 1 2 2v4m0 0v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6m18 0s-4 2-9 2-9-2-9-2m9-2h.01"/>
                        </svg>
                        {{ __('web.partnerships_benefit_3') }}
                    </dt>
                    <dd class="mt-4 text-base/7 text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_benefit_3_desc') }}
                    </dd>
                </div>
                <div class="relative">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18.5A2.493 2.493 0 0 1 7.51 20H7.5a2.468 2.468 0 0 1-2.4-3.154 2.98 2.98 0 0 1-.85-5.274 2.468 2.468 0 0 1 .92-3.182 2.477 2.477 0 0 1 1.876-3.344 2.5 2.5 0 0 1 3.41-1.856A2.5 2.5 0 0 1 12 5.5m0 13v-13m0 13a2.493 2.493 0 0 0 4.49 1.5h.01a2.468 2.468 0 0 0 2.403-3.154 2.98 2.98 0 0 0 .847-5.274 2.468 2.468 0 0 0-.921-3.182 2.477 2.477 0 0 0-1.875-3.344A2.5 2.5 0 0 0 14.5 3 2.5 2.5 0 0 0 12 5.5m-8 5a2.5 2.5 0 0 1 3.48-2.3m-.28 8.551a3 3 0 0 1-2.953-5.185M20 10.5a2.5 2.5 0 0 0-3.481-2.3m.28 8.551a3 3 0 0 0 2.954-5.185"/>
                        </svg>
                        {{ __('web.partnerships_benefit_4') }}
                    </dt>
                    <dd class="mt-4 text-base/7 text-gray-600 dark:text-gray-400">
                        {{ __('web.partnerships_benefit_4_desc') }}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
<div class="relative bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl lg:flex lg:justify-between lg:px-8 xl:justify-end">
        <div class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:absolute xl:inset-y-0 xl:right-1/2 xl:w-1/2">
            <div class="relative h-80 lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0">
                <img src="/assets/images/partnerships_2.jpg" alt="" class="absolute inset-0 size-full bg-gray-50 object-cover dark:bg-gray-800" />
            </div>
        </div>
        <div class="px-6 lg:contents">
            <div class="mx-auto max-w-2xl pt-16 pb-24 sm:pt-20 sm:pb-32 lg:mr-0 lg:ml-8 lg:w-full lg:max-w-lg lg:flex-none lg:pt-32 xl:w-1/2">
                <p class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('web.partnerships_cta_subtitle') }}</p>
                <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('web.partnerships_cta_title') }}</h1>
                <p class="mt-6 text-xl/8 text-gray-700 dark:text-gray-300">{{ __('web.partnerships_cta_description') }}</p>
                <div class="mt-10 max-w-xl text-base/7 text-gray-600 lg:max-w-none dark:text-gray-400">
                    <p>{!! __('web.partnerships_cta_text_1') !!}</p>
                    <p class="mt-4">{!! __('web.partnerships_cta_text_2') !!}</p>
                    <p class="mt-4">{!! __('web.partnerships_cta_text_3') !!}</p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600 dark:text-gray-400">
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600 dark:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L8.179 10.5a.75.75 0 00-1.358.668l1.723 3.5a.75.75 0 001.357-.067l3.857-5.5z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('web.partnerships_step_1') }}</strong> {{ __('web.partnerships_step_1_desc') }}</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600 dark:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L8.179 10.5a.75.75 0 00-1.358.668l1.723 3.5a.75.75 0 001.357-.067l3.857-5.5z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('web.partnerships_step_2') }}</strong> {{ __('web.partnerships_step_2_desc') }}</span>
                        </li>
                        <li class="flex gap-x-3">
                            <svg class="mt-1 size-5 flex-none text-indigo-600 dark:text-indigo-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.236 4.53L8.179 10.5a.75.75 0 00-1.358.668l1.723 3.5a.75.75 0 001.357-.067l3.857-5.5z" clip-rule="evenodd" />
                            </svg>
                            <span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('web.partnerships_step_3') }}</strong> {{ __('web.partnerships_step_3_desc') }}</span>
                        </li>
                    </ul>
                    <div class="mt-10 flex items-center gap-x-6">
                        <a href="{{ route('signup') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Become a Partner') }}</a>
                        <a href="#" class="text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('Contact Us') }} <span aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
