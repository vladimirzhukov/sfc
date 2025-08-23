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
        "name": "{{ __('Working Afternoons') }}",
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
                <h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">{{ __('web.wa_1') }}</h2>
                <p class="mt-6 text-lg/8 text-gray-300">{{ __('web.wa_2') }}</p>
            </div>
            <img width="1500" height="1000" src="/assets/images/wa.jpg" alt="{{ __('Working Afternoons') }}" class="relative -z-20 max-w-xl min-w-full rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-5xl lg:max-w-none" />
            <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10 dark:lg:border-white/10">
                <dl class="max-w-xl space-y-8 text-base/7 text-gray-300 lg:max-w-none">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('web.wa_3') }}</dt>
                        <dd class="inline">{{ __('web.wa_4') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('web.wa_5') }}</dt>
                        <dd class="inline">{{ __('web.wa_6') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('web.wa_7') }}</dt>
                        <dd class="inline">{{ __('web.wa_8') }}</dd>
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
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Start your own') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">{{ __('web.wa_9') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.wa_10') }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('web.wa_11') }}</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.wa_12') }}</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('web.wa_13') }}</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.wa_14') }}</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('web.wa_15') }}</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.wa_16') }}</p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
<div class="bg-white py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <div class="mx-auto">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl dark:text-white">{{ __('Working afternoons in Cyprus!') }}</h2>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">{!! __('web.index_wan') !!} <a class="font-semibold text-orange-400" href="#">{{ __('See the details') }}</a>.</p>
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
<div class="bg-gray-100 py-24 sm:py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div>
            <dt class="text-xl text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('web.wa_17') }}</dt>
            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">{{ __('web.wa_18') }}</dd>
        </div>
        <div>
            <dt class="text-xl text-base/7 font-semibold text-gray-900 dark:text-white mt-8">{{ __('web.wa_19') }}</dt>
            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">{{ __('web.wa_20') }}</dd>
        </div>
    </div>
</div>
<div class="relative bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl lg:flex lg:justify-between lg:px-8 xl:justify-end">
        <div class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:absolute xl:inset-y-0 xl:right-1/2 xl:w-1/2">
            <div class="relative h-80 lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0">
                <img src="/assets/images/wa1.jpg" alt="" class="absolute inset-0 size-full bg-gray-50 object-cover dark:bg-gray-800" />
            </div>
        </div>
        <div class="px-6 lg:contents">
            <div class="mx-auto max-w-2xl pt-16 pb-24 sm:pt-20 sm:pb-32 lg:mr-0 lg:ml-8 lg:w-full lg:max-w-lg lg:flex-none lg:pt-32 xl:w-1/2">
                <p class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('web.wa_21') }}</p>
                <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('web.wa_22') }}</h1>
                <p class="mt-6 text-xl/8 text-gray-700 dark:text-gray-300">{{ __('web.wa_23') }}</p>
                <div class="mt-10 max-w-xl text-base/7 text-gray-600 lg:max-w-none dark:text-gray-400">
                    <p>{!! __('web.wa_24') !!}</p>
                    <p class="mt-4">{!! __('web.wa_25') !!}</p>
                    <p class="mt-4">{!! __('web.wa_26') !!}</p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600 dark:text-gray-400">
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('web.wa_27') }}</strong> {{ __('web.wa_28') }}</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('web.wa_29') }}</strong> {{ __('web.wa_30') }}</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('web.wa_31') }}</strong> {{ __('web.wa_32') }}</span>
                        </li>
                    </ul>
                    <p class="mt-8">{{ __('web.wa_33') }}</p>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('web.wa_34') }}</h2>
                    <p class="mt-6">{{ __('web.wa_35') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
