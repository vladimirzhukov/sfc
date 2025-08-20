@extends('layouts.layout')

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}",
    "url": "{{ url()->current() }}",
    "description": "{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}",
    "areaServed": "Global",
    "provider": {
        "@@type": "Brand",
        "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}"
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
    }]
},
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [{
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
                <h2 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">Boost your productivity. Join Working Afternoons today.</h2>
                <p class="mt-6 text-lg/8 text-gray-300">Escape your home office and join Cyprus's most productive co-working community. Our Working Afternoons bring together founders, entrepreneurs, remote workers, and digital nomads in a relaxed environment where great work gets done.</p>
            </div>
            <img width="1500" height="1000" src="/assets/images/wa.jpg" alt="{{ __('Working Afternoons') }}" class="relative -z-20 max-w-xl min-w-full rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-5xl lg:max-w-none" />
            <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10 dark:lg:border-white/10">
                <dl class="max-w-xl space-y-8 text-base/7 text-gray-300 lg:max-w-none">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">Drop-in flexibility.</dt>
                        <dd class="inline">No RSVP needed, no agenda required. Just bring your laptop and join us whenever it works for your schedule.</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">Perfect atmosphere.</dt>
                        <dd class="inline">Grab a coffee or your favorite drink while tackling your most important tasks alongside motivated professionals.</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">Community-driven.</dt>
                        <dd class="inline">Connect with like-minded individuals who understand the entrepreneurial journey and remote work lifestyle.</dd>
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
            <h2 class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">Start your own</h2>
            <p class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl lg:text-balance dark:text-white">Everything you need to launch your Working Afternoon</p>
            <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-300">Ready to bring the productivity revolution to your city? Starting a Working Afternoon is simple and rewarding. Create a space where local professionals can escape isolation, boost productivity, and build meaningful connections in your community.</p>
        </div>
        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">Find the place</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">Find a venue with reliable high-speed internet and accessible power outlets for laptops. Look for cafes, co-working spaces, or community centers with comfortable seating and a welcoming atmosphere that supports focused work.</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">Secure the time</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">Approach the venue owner about hosting a weekly Working Afternoon from 2:00 PM to 6:00 PM. Most venues appreciate the consistent foot traffic and additional revenue during typically quieter afternoon hours.</p>
                    </dd>
                </div>
                <div class="flex flex-col">
                    <dt class="flex items-center gap-x-3 text-base/7 font-semibold text-gray-900 dark:text-white">Get listed</dt>
                    <dd class="mt-4 flex flex-auto flex-col text-base/7 text-gray-600 dark:text-gray-400">
                        <p class="flex-auto">Contact us with your venue details, preferred day, and time slot. We'll add your Working Afternoon to our official directory and help promote it to the local startup and remote work community.</p>
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
            <dt class="text-xl text-base/7 font-semibold text-gray-900 dark:text-white">Why start a Working Afternoon?</dt>
            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Build a thriving professional community in your area while creating consistent value for local venues. Working Afternoons foster genuine connections between entrepreneurs, remote workers, and digital nomads who are hungry for both productivity and community.</dd>
        </div>
        <div>
            <dt class="text-xl text-base/7 font-semibold text-gray-900 dark:text-white mt-8">What we provide</dt>
            <dd class="mt-2 text-base/7 text-gray-600 dark:text-gray-400">Complete organizer support including promotional materials, community directory listing, social media promotion, and connection to our network of hosts across Cyprus and beyond.</dd>
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
                <p class="text-base/7 font-semibold text-indigo-600 dark:text-indigo-400">From isolation to innovation</p>
                <h1 class="mt-2 text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">The story behind the movement</h1>
                <p class="mt-6 text-xl/8 text-gray-700 dark:text-gray-300">The concept of informal collaborative work sessions has transformed how independent professionals connect and create. What started as a simple solution to home office isolation has evolved into a global movement that redefined the future of work.</p>
                <div class="mt-10 max-w-xl text-base/7 text-gray-600 lg:max-w-none dark:text-gray-400">
                    <p>The mid-2000s marked a turning point for independent workers. As freelancers, remote employees, and entrepreneurs grew in numbers, a critical challenge emerged: <strong>professional and social isolation</strong>. Coffee shops offered temporary relief, but lacked the consistent community that creative minds craved.</p>
                    <p>The breakthrough came in February 2006 when two friends in <strong>New York City</strong>, Amit Gupta and Luke Crawford, decided to tackle this problem head-on. Working from separate home offices, they missed the creative energy and spontaneous collaboration of traditional workspaces. Their solution was elegantly simple: invite friends to work together from Amit's Chelsea loft for a day.</p>
                    <p>They called it "Jelly" - envisioning a group of independent professionals (invertebrates without rigid corporate structure) "jamming together." The tagline captured everything: "<strong>Show up with a laptop and work alongside others.</strong>"</p>
                    <ul role="list" class="mt-8 space-y-8 text-gray-600 dark:text-gray-400">
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900 dark:text-white">Open-source movement.</strong> Jelly was intentionally free and unstructured. No fees, no forced networking, no rigid schedules. People could arrive and leave as their productivity demanded, creating natural workflow rhythms.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900 dark:text-white">Viral community growth.</strong> The concept spread organically across dozens, then hundreds of cities worldwide. Anyone with suitable space could host their own Jelly, supported by wiki documentation and grassroots enthusiasm.</span>
                        </li>
                        <li class="flex gap-x-3">
                            <span><strong class="font-semibold text-gray-900 dark:text-white">Foundation for coworking.</strong> Jelly proved massive untapped demand for flexible, community-driven workspaces. This proof of concept directly inspired the coworking industry boom that followed, including giants like WeWork.</span>
                        </li>
                    </ul>
                    <p class="mt-8">Jelly wasn't about the time of day - it was about transforming the where and how of independent work. This grassroots solution to digital age isolation became the catalyst for an entire industry that fundamentally reshaped our understanding of what an "office" can be.</p>
                    <h2 class="mt-16 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The catalyst that changed everything</h2>
                    <p class="mt-6">Today's Working Afternoons carry forward this same spirit: creating spaces where productivity meets community, where isolation transforms into collaboration, and where the best work happens naturally alongside others who share the journey.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
