@extends('layouts.layout')

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Event",
    "name": "{{ $event->name }}",
    "description": "{{ strip_tags($event->description) }}",
    "startDate": "{{ \Carbon\Carbon::parse($event->start_date)->toISOString() }}",
    @if ($event->end_date)
        "endDate": "{{ \Carbon\Carbon::parse($event->end_date)->toISOString() }}",
    @endif
    "eventStatus": "https://schema.org/EventScheduled",
    "eventAttendanceMode": "{{ $event->is_online ? 'https://schema.org/OnlineEventAttendanceMode' : 'https://schema.org/OfflineEventAttendanceMode' }}",
    "location": {
        "@@type": "{{ $event->is_online ? 'VirtualLocation' : 'Place' }}",
        @if ($event->is_online)
            "url": "{{ $event->link }}"
        @else
            "name": "{{ $event->city->name }}",
            "address": {
                "@@type": "PostalAddress",
                "addressLocality": "{{ $event->location ?? 'Cyprus' }}",
                "addressCountry": "CY"
            }
            @if ($event->lat && $event->lon)
            ,"geo": {
                "@type": "GeoCoordinates",
                "latitude": {{ $event->lat }},
                "longitude": {{ $event->lon }}
            }
            @endif
        @endif
    },
    @if ($event->img)
        "image": "https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/events/{{ substr($event->img, 0, 1) }}/{{ substr($event->img, 0, 2) }}/{{ substr($event->img, 0, 3) }}/{{ $event->img }}",
    @endif
    "organizer": {
        "@@type": "Organization",
        "name": "{{ $event->user->profile->first_name ?? 'SFC.CY' }}"
    },
    @if ($event->price && !$event->is_free)
        "offers": {
            "@@type": "Offer",
            "price": "{{ $event->price }}",
            "priceCurrency": "EUR"
        },
    @endif
    "url": "{{ route('web::event', $event->slug) }}"
}
</script>
@endsection

@section('content')
    <div class="relative isolate overflow-hidden pt-14">
        <!-- Event Header -->
        <div class="relative isolate overflow-hidden bg-gray-900 px-6 py-16 sm:py-20 lg:py-28">
            <div class="mx-auto max-w-4xl">
                <!-- Breadcrumb -->
                <nav aria-label="Breadcrumb" class="flex mb-8">
                    <ol role="list" class="flex items-center space-x-4">
                        <li>
                            <div>
                                <a href="{{ route('web::index') }}" class="text-gray-400 hover:text-gray-300">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0">
                                        <path d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" fill-rule="evenodd" />
                                    </svg>
                                    <span class="sr-only">{{ __('Home') }}</span>
                                </a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-gray-400">
                                    <path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                                <a href="{{ route('web::events') }}" class="ml-4 text-sm font-medium text-gray-400 hover:text-gray-300">{{ __('Events') }}</a>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg viewBox="0 0 20 20" fill="currentColor" class="size-5 shrink-0 text-gray-400">
                                    <path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                                </svg>
                                <span class="ml-4 text-sm font-medium text-gray-500" aria-current="page">{{ Str::limit($event->name, 30) }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <!-- Event Status Badge -->
                @php
                    $eventDate = \Carbon\Carbon::parse($event->start_date);
                    $now = \Carbon\Carbon::now();
                    $isUpcoming = $eventDate->isFuture();
                    $isPast = $eventDate->isPast();
                    $isToday = $eventDate->isToday();
                @endphp

                <div class="mb-6">
                    @if ($isToday)
                        <span class="inline-flex items-center gap-x-1.5 rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-800">
                        <div class="flex-none rounded-full bg-blue-500 p-1"><div class="size-1.5 rounded-full bg-white"></div></div>
                        {{ __('Today') }}
                    </span>
                    @elseif ($isUpcoming)
                        <span class="inline-flex items-center gap-x-1.5 rounded-full bg-green-100 px-3 py-1 text-sm font-medium text-green-800">
                        <div class="flex-none rounded-full bg-green-500 p-1"><div class="size-1.5 rounded-full bg-white"></div></div>
                        {{ __('Upcoming') }}
                    </span>
                    @else
                        <span class="inline-flex items-center gap-x-1.5 rounded-full bg-gray-100 px-3 py-1 text-sm font-medium text-gray-800">
                        <div class="flex-none rounded-full bg-gray-500 p-1"><div class="size-1.5 rounded-full bg-white"></div></div>
                        {{ __('Past') }}
                    </span>
                    @endif
                </div>

                <!-- Event Title -->
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    {{ $event->name }}
                </h1>

                <!-- Event Meta Information -->
                <div class="mt-8 space-y-4">
                    <!-- Date & Time -->
                    <div class="flex items-center text-lg text-gray-300">
                        <svg class="size-6 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        @if (date('Y-m-d', strtotime($event->start_date)) != date('Y-m-d', strtotime($event->end_date)))
                            {{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y H:i') }}
                            @if ($event->end_date)
                                - {{ \Carbon\Carbon::parse($event->end_date)->format('M j, Y H:i') }}
                            @endif
                        @else
                            {{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y') }}
                            <span class="mx-2">•</span>
                            {{ \Carbon\Carbon::parse($event->start_date)->format('H:i') }}
                            @if ($event->end_date)
                                - {{ \Carbon\Carbon::parse($event->end_date)->format('H:i') }}
                            @endif
                        @endif
                    </div>

                    <!-- Location -->
                    <div class="flex items-center text-lg text-gray-300">
                        <svg class="size-6 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        @if ($event->is_online)
                            {{ __('Online Event') }}
                        @else
                            {{ $event->location ?? ($event->city->name ?? __('Cyprus')) }}
                        @endif
                    </div>

                    <!-- Price -->
                    <div class="flex items-center text-lg text-gray-300">
                        <svg class="size-6 mr-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                        </svg>
                        @if ($event->is_free || empty($event->price))
                            <span class="text-green-400 font-semibold">{{ __('FREE') }}</span>
                        @else
                            <span class="font-semibold">€{{ number_format($event->price, 2) }} EUR</span>
                        @endif
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-10 flex flex-wrap gap-4">
                    @if ($event->is_online && $event->link)
                        <a href="{{ $event->link }}" target="_blank" class="rounded-md bg-orange-500 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">
                            {{ __('Join Online') }}
                        </a>
                    @endif
                    <button class="rounded-md bg-white/10 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        {{ __('Add to Calendar') }}
                    </button>
                    <button class="rounded-md bg-white/10 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-white/20 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white">
                        {{ __('Share') }}
                    </button>
                </div>
            </div>

            <!-- Background decoration -->
            <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25"></div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="bg-white">
            <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8 lg:py-24">
                <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                    <!-- Main Content -->
                    <div class="lg:col-span-8">
                        <!-- Event Image -->
                        @if ($event->img)
                            <div class="mb-8">
                                <img src="https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/events/{{ substr($event->img, 0, 1) }}/{{ substr($event->img, 0, 2) }}/{{ substr($event->img, 0, 3) }}/{{ $event->img }}" alt="{{ $event->name }}" class="w-full h-64 sm:h-96 object-cover rounded-lg shadow-lg">
                            </div>
                        @endif

                        <!-- Event Description -->
                        <div class="prose prose-lg max-w-none">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">{{ __('About this Event') }}</h2>
                            @if ($event->description_html)
                                {!! $event->description_html !!}
                            @elseif ($event->description)
                                <p class="text-gray-700 leading-relaxed">{!! nl2br(e($event->description)) !!}</p>
                            @else
                                <p class="text-gray-500 italic">{{ __('No description available for this event.') }}</p>
                            @endif
                        </div>

                        <!-- Event Categories -->
                        @if (!empty($event->categories))
                            <div class="mt-8">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Categories') }}</h3>
                                <div class="flex flex-wrap gap-2">
                                    @php
                                        $categoryIDs = explode('][', trim($event->categories, '[]'));
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

                        <!-- Event Languages -->
                        @if (!empty($event->languages))
                            <div class="mt-8">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Languages') }}</h3>
                                <div class="flex flex-wrap gap-2">
                                    @php
                                        $languageIDs = explode('][', trim($event->languages, '[]'));
                                    @endphp
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

                    <!-- Sidebar -->
                    <div class="mt-12 lg:mt-0 lg:col-span-4">
                        <div class="sticky top-8 space-y-6">
                            <!-- Event Details Card -->
                            <div class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Event Details') }}</h3>
                                <dl class="space-y-4">
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">{{ __('Date & Time') }}</dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            @if (date('Y-m-d', strtotime($event->start_date)) != date('Y-m-d', strtotime($event->end_date)))
                                                {{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y H:i') }}
                                                @if ($event->end_date)
                                                    <br>{{ \Carbon\Carbon::parse($event->end_date)->format('M j, Y H:i') }}
                                                @endif
                                            @else
                                                {{ \Carbon\Carbon::parse($event->start_date)->format('M j, Y') }}<br>
                                                {{ \Carbon\Carbon::parse($event->start_date)->format('H:i') }}
                                                @if ($event->end_date)
                                                    - {{ \Carbon\Carbon::parse($event->end_date)->format('H:i') }}
                                                @endif
                                            @endif
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">{{ __('Location') }}</dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            @if ($event->is_online)
                                                {{ __('Online Event') }}
                                            @else
                                                {{ $event->location ?? ($event->city->name ?? __('Cyprus')) }}
                                            @endif
                                        </dd>
                                    </div>
                                    <div>
                                        <dt class="text-sm font-medium text-gray-500">{{ __('Price') }}</dt>
                                        <dd class="mt-1 text-sm text-gray-900">
                                            @if ($event->is_free || empty($event->price))
                                                <span class="text-green-600 font-semibold">{{ __('FREE') }}</span>
                                            @else
                                                <span class="font-semibold">€{{ number_format($event->price, 2) }} EUR</span>
                                            @endif
                                        </dd>
                                    </div>
                                    @if (!empty($event->city))
                                        <div>
                                            <dt class="text-sm font-medium text-gray-500">{{ __('City') }}</dt>
                                            <dd class="mt-1 text-sm text-gray-900">{{ $event->city->name }}</dd>
                                        </div>
                                    @endif
                                </dl>
                            </div>

                            <!-- Map for offline events -->
                            @if (!$event->is_online && $event->lat && $event->lon)
                                <div class="bg-gray-50 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Location') }}</h3>
                                    <div id="map" class="h-48 rounded-md overflow-hidden bg-gray-200"></div>
                                    <p class="mt-2 text-sm text-gray-600">{{ $event->location }}</p>
                                </div>
                            @endif

                            <!-- Organizer Info -->
                            @if (!empty($event->organizer))
                                <div class="bg-gray-50 rounded-lg p-6">
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Organizer') }}</h3>
                                    <div class="flex items-center space-x-3">
                                        @if ($event->organizer->avatar)
                                            <img src="{{ $event->organizer->avatar }}" alt="{{ $event->organizer->name }}" class="size-10 rounded-full">
                                        @else
                                            <div class="size-10 bg-gray-300 rounded-full flex items-center justify-center">
                                                <svg class="size-6 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        @endif
                                        <div>
                                            <p class="font-medium text-gray-900">{{ $event->organizer->name }}</p>
                                            @if ($event->organizer->company)
                                                <p class="text-sm text-gray-500">{{ $event->organizer->company }}</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Share Options -->
                            <div class="bg-gray-50 rounded-lg p-6">
                                <h3 class="text-lg font-semibold text-gray-900 mb-4">{{ __('Share this Event') }}</h3>
                                <div class="flex space-x-3">
                                    <a href="#" class="flex items-center justify-center size-10 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                        <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z" clip-rule="evenodd" />
                                        </svg>
                                    </a>
                                    <a href="#" class="flex items-center justify-center size-10 bg-sky-500 text-white rounded-md hover:bg-sky-600">
                                        <svg class="size-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />
                                        </svg>
                                    </a>
                                    <a href="#" class="flex items-center justify-center size-10 bg-green-600 text-white rounded-md hover:bg-green-700">
                                        <svg class="size-5" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                        </svg>
                                    </a>
                                    <button class="flex items-center justify-center size-10 bg-gray-600 text-white rounded-md hover:bg-gray-700">
                                        <svg class="size-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Related Events -->
        @if (!empty($relatedEvents) && $relatedEvents->isNotEmpty())
            <div class="bg-gray-50 py-16">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 mb-8 text-center">{{ __('Similar Events') }}</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($relatedEvents as $relatedEvent)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                                @if ($relatedEvent->img)
                                    <img src="https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/events/{{ substr($relatedEvent->img, 0, 1) }}/{{ substr($relatedEvent->img, 0, 2) }}/{{ substr($relatedEvent->img, 0, 3) }}/th_{{ $relatedEvent->img }}" alt="{{ $relatedEvent->name }}" class="w-full h-48 object-cover">
                                @else
                                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                        <svg class="size-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="flex items-center justify-between mb-2">
                                        @php
                                            $relatedEventDate = \Carbon\Carbon::parse($relatedEvent->start_date);
                                            $relatedNow = \Carbon\Carbon::now();
                                            $relatedIsUpcoming = $relatedEventDate->isFuture();
                                            $relatedIsPast = $relatedEventDate->isPast();
                                            $relatedIsToday = $relatedEventDate->isToday();
                                        @endphp

                                        @if ($relatedIsToday)
                                            <span class="inline-flex items-center gap-x-1 rounded-full bg-blue-100 px-2 py-1 text-xs font-medium text-blue-800">
                                            <div class="flex-none rounded-full bg-blue-500 p-0.5"><div class="size-1 rounded-full bg-white"></div></div>
                                            {{ __('Today') }}
                                        </span>
                                        @elseif ($relatedIsUpcoming)
                                            <span class="inline-flex items-center gap-x-1 rounded-full bg-green-100 px-2 py-1 text-xs font-medium text-green-800">
                                            <div class="flex-none rounded-full bg-green-500 p-0.5"><div class="size-1 rounded-full bg-white"></div></div>
                                            {{ __('Upcoming') }}
                                        </span>
                                        @else
                                            <span class="inline-flex items-center gap-x-1 rounded-full bg-gray-100 px-2 py-1 text-xs font-medium text-gray-800">
                                            <div class="flex-none rounded-full bg-gray-500 p-0.5"><div class="size-1 rounded-full bg-white"></div></div>
                                            {{ __('Past') }}
                                        </span>
                                        @endif

                                        @if ($relatedEvent->is_free || empty($relatedEvent->price))
                                            <span class="text-sm font-semibold text-green-600">{{ __('FREE') }}</span>
                                        @else
                                            <span class="text-sm font-semibold text-gray-900">€{{ number_format($relatedEvent->price, 2) }}</span>
                                        @endif
                                    </div>

                                    <h3 class="text-lg font-semibold text-gray-900 mb-2 line-clamp-2">
                                        <a href="{{ route('web::event', $relatedEvent->slug) }}" class="hover:text-orange-600 transition-colors">
                                            {{ $relatedEvent->name }}
                                        </a>
                                    </h3>

                                    <div class="flex items-center text-sm text-gray-500 mb-2">
                                        <svg class="size-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                        {{ \Carbon\Carbon::parse($relatedEvent->start_date)->format('M j, Y') }}
                                    </div>

                                    <div class="flex items-center text-sm text-gray-500 mb-4">
                                        <svg class="size-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                        </svg>
                                        @if ($relatedEvent->is_online)
                                            {{ __('Online') }}
                                        @else
                                            {{ $relatedEvent->city->name ?? __('Cyprus') }}
                                        @endif
                                    </div>

                                    <a href="{{ route('web::event', $relatedEvent->slug) }}" class="inline-flex items-center text-sm font-medium text-orange-600 hover:text-orange-700 transition-colors">
                                        {{ __('Learn more') }}
                                        <svg class="size-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-12 text-center">
                        <a href="{{ route('web::events') }}" class="inline-flex items-center rounded-md bg-orange-500 px-6 py-3 text-base font-semibold text-white shadow-sm hover:bg-orange-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-500">
                            {{ __('View All Events') }}
                            <svg class="size-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize map for offline events
            @if (!$event->is_online && $event->lat && $event->lon)
            if (typeof L !== 'undefined') {
                const map = L.map('map', {
                    center: [{{ $event->lat }}, {{ $event->lon }}],
                    zoom: 15,
                    scrollWheelZoom: false
                });

                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                L.marker([{{ $event->lat }}, {{ $event->lon }}])
                    .addTo(map)
                    .bindPopup('{{ addslashes($event->location ?? $event->name) }}');
            }
            @endif

            // Add to calendar functionality
            const addToCalendarBtn = document.querySelector('button:contains("Add to Calendar")');
            if (addToCalendarBtn) {
                addToCalendarBtn.addEventListener('click', function() {
                    const title = encodeURIComponent('{{ addslashes($event->name) }}');
                    const startDate = '{{ \Carbon\Carbon::parse($event->start_date)->format("Ymd\THis\Z") }}';
                    const endDate = '{{ $event->end_date ? \Carbon\Carbon::parse($event->end_date)->format("Ymd\THis\Z") : \Carbon\Carbon::parse($event->start_date)->addHour()->format("Ymd\THis\Z") }}';
                    const description = encodeURIComponent('{{ addslashes(strip_tags($event->description)) }}');
                    const location = encodeURIComponent('{{ addslashes($event->is_online ? "Online Event" : ($event->location ?? "Cyprus")) }}');

                    const googleCalendarUrl = `https://calendar.google.com/calendar/render?action=TEMPLATE&text=${title}&dates=${startDate}/${endDate}&details=${description}&location=${location}`;

                    window.open(googleCalendarUrl, '_blank');
                });
            }

            // Share functionality
            const shareBtn = document.querySelector('button:contains("Share")');
            if (shareBtn && navigator.share) {
                shareBtn.addEventListener('click', function() {
                    navigator.share({
                        title: '{{ addslashes($event->name) }}',
                        text: '{{ addslashes(Str::limit(strip_tags($event->description), 100)) }}',
                        url: window.location.href
                    });
                });
            }
        });
    </script>

    @if (!$event->is_online && $event->lat && $event->lon)
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @endif
@endsection
