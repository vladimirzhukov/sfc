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
        "name": "{{ __('Privacy Policy') }}",
        "item": "{{ url()->current() }}"
    }]
}
</script>
@endsection

@section('content')
<div class="relative isolate overflow-hidden">
    <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-20 sm:rounded-3xl sm:px-10 sm:py-24 lg:py-24 xl:px-24 dark:bg-gray-800/50 dark:after:pointer-events-none dark:after:absolute dark:after:inset-0 dark:after:inset-ring dark:after:inset-ring-white/10 dark:after:sm:rounded-3xl">
        <div class="mx-auto max-w-7xl">
            <h1 class="text-5xl font-semibold tracking-tight text-white mt-8 sm:text-7xl dark:text-white">{{ __('Privacy Policy') }}</h1>
            <p class="mt-8 text-lg font-medium text-pretty text-gray-200 sm:text-xl/8 dark:text-gray-200">{{ __('Startup Founders Community in Cyprus') }}: {{ __('web.index_subheading') }}</p>
            <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25 dark:opacity-20"></div>
            </div>
        </div>
    </div>
</div>
<div class="bg-white py-24 sm:py-32 dark:bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-8 bg-indigo-50 dark:bg-indigo-900/20 rounded-lg p-6 border border-indigo-200 dark:border-indigo-700">
            <p class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">{!! __('privacy.date') !!}</p>
        </div>
        <div class="mb-12 bg-gray-50 dark:bg-gray-900/20 rounded-lg p-6 border-l-4 border-gray-500">
            <p class="text-lg font-medium text-pretty text-gray-700 dark:text-gray-300 sm:text-xl/8">{!! __('privacy.subtitle') !!}</p>
        </div>
        <div class="prose prose-lg max-w-none dark:prose-invert prose-headings:text-gray-900 dark:prose-headings:text-white prose-p:text-gray-600 dark:prose-p:text-gray-300 prose-li:text-gray-600 dark:prose-li:text-gray-300">
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_1_title') !!}</h2>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">{!! __('privacy.section_1_1_title') !!}</h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_1_1_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6 list-disc list-inside">
                <li>{!! __('privacy.personal_info_name') !!}</li>
                <li>{!! __('privacy.personal_info_professional') !!}</li>
                <li>{!! __('privacy.personal_info_profile') !!}</li>
                <li>{!! __('privacy.personal_info_events') !!}</li>
                <li>{!! __('privacy.personal_info_communications') !!}</li>
                <li>{!! __('privacy.personal_info_feedback') !!}</li>
            </ul>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">{!! __('privacy.section_1_2_title') !!}</h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_1_2_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6 list-disc list-inside">
                <li>{!! __('privacy.auto_info_ip') !!}</li>
                <li>{!! __('privacy.auto_info_device') !!}</li>
                <li>{!! __('privacy.auto_info_usage') !!}</li>
                <li>{!! __('privacy.auto_info_cookies') !!}</li>
                <li>{!! __('privacy.auto_info_logs') !!}</li>
            </ul>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">{!! __('privacy.section_1_3_title') !!}</h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_1_3_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_2_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_2_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-8 list-disc list-inside">
                <li>{!! __('privacy.use_providing') !!}</li>
                <li>{!! __('privacy.use_creating') !!}</li>
                <li>{!! __('privacy.use_facilitating') !!}</li>
                <li>{!! __('privacy.use_notifications') !!}</li>
                <li>{!! __('privacy.use_improving') !!}</li>
                <li>{!! __('privacy.use_security') !!}</li>
                <li>{!! __('privacy.use_legal') !!}</li>
                <li>{!! __('privacy.use_personalizing') !!}</li>
            </ul>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_3_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_3_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-8 list-disc list-inside">
                <li>{!! __('privacy.legal_consent') !!}</li>
                <li>{!! __('privacy.legal_contract') !!}</li>
                <li>{!! __('privacy.legal_interests') !!}</li>
                <li>{!! __('privacy.legal_compliance') !!}</li>
            </ul>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_4_title') !!}</h2>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">{!! __('privacy.section_4_1_title') !!}</h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">{!! __('privacy.section_4_1_content') !!}</p>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">{!! __('privacy.section_4_2_title') !!}</h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-6">{!! __('privacy.section_4_2_content') !!}</p>
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white mt-8 mb-4">{!! __('privacy.section_4_3_title') !!}</h3>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_4_3_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_5_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_5_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-8 list-disc list-inside">
                <li>{!! __('privacy.security_encryption') !!}</li>
                <li>{!! __('privacy.security_assessments') !!}</li>
                <li>{!! __('privacy.security_access') !!}</li>
                <li>{!! __('privacy.security_storage') !!}</li>
                <li>{!! __('privacy.security_training') !!}</li>
            </ul>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_6_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_6_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-4 list-disc list-inside">
                <li>{!! __('privacy.rights_access') !!}</li>
                <li>{!! __('privacy.rights_rectification') !!}</li>
                <li>{!! __('privacy.rights_erasure') !!}</li>
                <li>{!! __('privacy.rights_portability') !!}</li>
                <li>{!! __('privacy.rights_restriction') !!}</li>
                <li>{!! __('privacy.rights_objection') !!}</li>
                <li>{!! __('privacy.rights_withdraw') !!}</li>
            </ul>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.rights_exercise') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_7_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.section_7_intro') !!}</p>
            <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-6 list-disc list-inside">
                <li>{!! __('privacy.cookies_preferences') !!}</li>
                <li>{!! __('privacy.cookies_analytics') !!}</li>
                <li>{!! __('privacy.cookies_personalized') !!}</li>
                <li>{!! __('privacy.cookies_security') !!}</li>
            </ul>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.cookies_control') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_8_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_8_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_9_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_9_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_10_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_10_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_11_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_11_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_12_title') !!}</h2>
            <p class="text-lg text-gray-600 dark:text-gray-300 mb-8">{!! __('privacy.section_12_content') !!}</p>
            <h2 class="text-3xl font-semibold tracking-tight text-gray-900 dark:text-white mt-12 mb-6">{!! __('privacy.section_13_title') !!}</h2>
            <div class="bg-gray-50 dark:bg-gray-800 rounded-lg p-6 mb-8">
                <p class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{!! __('privacy.contact_questions_title') !!}</p>
                <p class="text-gray-600 dark:text-gray-300 mb-4">{!! __('privacy.contact_intro') !!}</p>
                <ul class="space-y-2 text-gray-600 dark:text-gray-300 mb-4">
                    <li><strong>{!! __('privacy.contact_email_label') !!}</strong> {!! __('privacy.contact_email') !!}</li>
                    {{--<li><strong>{!! __('privacy.contact_dpo_label') !!}</strong> {!! __('privacy.contact_dpo_email') !!}</li>--}}
                    <li><strong>{!! __('privacy.contact_location_label') !!}</strong> {!! __('privacy.contact_location') !!}</li>
                </ul>
                <p class="text-sm text-gray-500 dark:text-gray-400 italic">{!! __('privacy.contact_response_time') !!}</p>
            </div>
            <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-lg p-6 border border-blue-200 dark:border-blue-700">
                <p class="text-lg font-semibold text-blue-700 dark:text-blue-300">
                    {!! __('privacy.closing_message') !!}
                </p>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-100 py-32 dark:bg-gray-900">
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
@endsection
