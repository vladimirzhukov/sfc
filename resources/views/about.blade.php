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
        "name": "{{ __('About') }}",
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
                <h1 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">{{ __('About Startup Founders Community Cyprus') }}</h1>
                <p class="mt-6 text-lg/8 text-gray-300">{{ __('web.about_1') }}</p>
            </div>
            <img width="1500" height="1001" src="/assets/images/about.jpg" alt="{{ __('Startup Founders Community in Cyprus') }}" class="relative -z-20 max-w-xl min-w-full rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-5xl lg:max-w-none" />
            <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10 dark:lg:border-white/10">
                <dl class="max-w-xl space-y-8 text-base/7 text-gray-300 lg:max-w-none">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('Our Mission') }}.</dt>
                        <dd class="inline">{{ __('web.about_2') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('Global Presence') }}.</dt>
                        <dd class="inline">{{ __('web.about_3') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('Community Focus') }}.</dt>
                        <dd class="inline">{{ __('web.about_4') }}</dd>
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
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Our Story') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">{{ __('From Vision to Community') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.about_5') }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Perfect Networking Hub') }}</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.about_6') }}</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Global Network') }}</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.about_7') }}</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">{{ __('Free & Accessible') }}</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">{{ __('web.about_8') }}</p>
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
<div class="bg-white py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
        <div class="mx-auto">
            <h2 class="text-4xl font-semibold tracking-tight text-balance text-gray-900 sm:text-5xl dark:text-white">{{ __('Meet Our Leaders') }}</h2>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">{{ __('web.about_9') }}</p>
        </div>
        <ul role="list" class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none">
            <li>
                <img src="/assets/images/volodymyr-zhukov.png" alt="{{ __('Volodymyr Zhukov') }}" class="mx-auto size-56 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">{{ __('Volodymyr Zhukov') }}</h3>
                <p class="text-sm/6 text-gray-600 dark:text-gray-400">{{ __('Founder & Community Leader') }}</p>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.about_10') }}</p>
            </li>
            <li>
                <img src="/assets/images/carmine-masiello.jpeg" alt="{{ __('Carmine Masiello') }}" class="mx-auto size-56 rounded-full outline-1 -outline-offset-1 outline-black/5 dark:outline-white/10" />
                <h3 class="mt-6 text-base/7 font-semibold tracking-tight text-gray-900 dark:text-white">{{ __('Carmine Masiello') }}</h3>
                <p class="text-sm/6 text-gray-600 dark:text-gray-400">{{ __('Working Afternoons Innovator') }}</p>
                <p class="mt-4 text-sm/6 text-gray-600 dark:text-gray-400">{{ __('web.about_11') }}</p>
            </li>
        </ul>
    </div>
</div>
<div class="relative bg-white dark:bg-gray-900">
    <div class="mx-auto max-w-7xl lg:flex lg:justify-between lg:px-8 xl:justify-end">
        <div class="lg:flex lg:w-1/2 lg:shrink lg:grow-0 xl:absolute xl:inset-y-0 xl:right-1/2 xl:w-1/2">
            <div class="relative h-80 lg:-ml-8 lg:h-auto lg:w-full lg:grow xl:ml-0">
                <img src="/assets/images/community-networking.jpg" alt="{{ __('Startup Founders Community in Cyprus') }}" class="absolute inset-0 size-full bg-gray-50 object-cover dark:bg-gray-800" />
            </div>
        </div>
        <div class="px-6 lg:contents">
            <div class="mx-auto max-w-2xl pt-16 pb-24 sm:pt-20 sm:pb-32 lg:mr-0 lg:ml-8 lg:w-full lg:max-w-lg lg:flex-none lg:pt-32 xl:w-1/2">
                <p class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Our Philosophy') }}</p>
                <h2 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Building Meaningful Connections') }}</h2>
                <p class="mt-6 text-xl/8 text-gray-700 dark:text-gray-300">{{ __('web.about_12') }}</p>
                <div class="mt-10 max-w-xl text-base/7 text-gray-600 lg:max-w-none dark:text-gray-400">
                    <p>{{ __('web.about_13') }}</p>
                    <p class="mt-4">{{ __('web.about_14') }}</p>
                    <p class="mt-4">{{ __('web.about_15') }}</p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600 dark:text-gray-400">
                        <li class="flex gap-x-3"><span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('Inclusive Environment') }}</strong>. {{ __('web.about_16') }}</span></li>
                        <li class="flex gap-x-3"><span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('Knowledge Sharing') }}</strong>. {{ __('web.about_17') }}</span></li>
                        <li class="flex gap-x-3"><span><strong class="font-semibold text-gray-900 dark:text-white">{{ __('Collaboration Focus') }}</strong>. {{ __('web.about_18') }}</span></li>
                    </ul>
                    <p class="mt-8">{{ __('web.about_19') }}</p>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ __('Ready to Connect?') }}</h2>
                    <p class="mt-6">{{ __('web.about_20') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-24 sm:py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{{ __('Join Our Movement') }}</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">{{ __('Become Part of Something Bigger') }}</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">{{ __('web.about_21') }}</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl text-center">
            <a href="{{ route('web::wa') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400">{{ __('Explore Working Afternoons') }}</a>
        </div>
    </div>
</div>
@endsection
