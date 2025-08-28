@extends('layouts.layout')

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "WebPage",
    "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'Contact Us - SFC.CY')) }}",
    "url": "{{ url()->current() }}",
    "description": "{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : 'Get in touch with Startup Founders Community Cyprus. Connect with fellow entrepreneurs, join our events, and grow your startup network in Cyprus.')) }}",
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
        "name": "{{ __('Contact Us') }}",
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
                <h1 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-4xl">{{ __("Join Cyprus's Premier Startup Community") }}</h1>
                <p class="mt-6 text-lg/8 text-gray-300">{{ __('web.contact_1') }}</p>
            </div>
            <img width="1500" height="1000" src="/assets/images/contact-community.jpg" alt="{{ __('Startup founders networking in Cyprus') }}" class="relative -z-20 max-w-xl min-w-full rounded-xl shadow-xl ring-1 ring-white/10 lg:row-span-4 lg:w-5xl lg:max-w-none" />
            <div class="max-w-xl lg:row-start-3 lg:mt-10 lg:max-w-md lg:border-t lg:border-white/10 lg:pt-10 dark:lg:border-white/10">
                <dl class="max-w-xl space-y-8 text-base/7 text-gray-300 lg:max-w-none">
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('Working Afternoons') }}.</dt>
                        <dd class="inline">{{ __('web.contact_2') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('Mentorship Program') }}.</dt>
                        <dd class="inline">{{ __('web.contact_3') }}</dd>
                    </div>
                    <div class="relative">
                        <dt class="inline-block font-semibold text-white">{{ __('Resource Access') }}.</dt>
                        <dd class="inline">{{ __('web.contact_4') }}</dd>
                    </div>
                </dl>
            </div>
        </div>
        <div aria-hidden="true" class="pointer-events-none absolute top-1/2 left-12 -z-10 -translate-y-1/2 transform-gpu blur-3xl lg:top-auto lg:-bottom-48 lg:translate-y-0">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-25 dark:opacity-20"></div>
        </div>
    </div>
</div>
<div class="relative isolate bg-white dark:bg-gray-900">
    <div class="mx-auto grid max-w-7xl grid-cols-1 lg:grid-cols-2">
        <div class="relative px-6 pt-24 pb-20 sm:pt-32 lg:static lg:px-8 lg:py-48">
            <div class="mx-auto max-w-xl lg:mx-0 lg:max-w-lg">
                <div class="absolute inset-y-0 left-0 -z-10 w-full overflow-hidden bg-gray-100 ring-1 ring-gray-900/10 lg:w-1/2 dark:bg-gray-900 dark:ring-white/10">
                    <svg aria-hidden="true" class="absolute inset-0 size-full mask-[radial-gradient(100%_100%_at_top_right,white,transparent)] stroke-gray-200 dark:stroke-white/10"><defs><pattern id="83fd4e5a-9d52-42fc-97b6-718e5d7ee527" width="200" height="200" x="100%" y="-1" patternUnits="userSpaceOnUse"><path d="M130 200V.5M.5 .5H200" fill="none" /></pattern></defs><rect width="100%" height="100%" stroke-width="0" class="fill-white dark:fill-gray-900" /><svg x="100%" y="-1" class="overflow-visible fill-gray-50 dark:fill-gray-800/20"><path d="M-470.5 0h201v201h-201Z" stroke-width="0" /></svg><rect width="100%" height="100%" fill="url(#83fd4e5a-9d52-42fc-97b6-718e5d7ee527)" stroke-width="0" /></svg>
                    <div aria-hidden="true" class="absolute top-[calc(100%-13rem)] -left-56 hidden transform-gpu blur-3xl lg:top-[calc(50%-7rem)] lg:left-[max(-14rem,calc(100%-59rem))] dark:block"><div style="clip-path: polygon(74.1% 56.1%, 100% 38.6%, 97.5% 73.3%, 85.5% 100%, 80.7% 98.2%, 72.5% 67.7%, 60.2% 37.8%, 52.4% 32.2%, 47.5% 41.9%, 45.2% 65.8%, 27.5% 23.5%, 0.1% 35.4%, 17.9% 0.1%, 27.6% 23.5%, 76.1% 2.6%, 74.1% 56.1%)" class="aspect-1155/678 w-288.75 bg-linear-to-br from-[#80caff] to-[#4f46e5] opacity-10 dark:opacity-20"></div></div>
                </div>
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl dark:text-white">{{ __('Ready to Connect?') }}</h2>
                <p class="mt-6 text-lg/8 text-gray-600 dark:text-gray-400">{{ __('web.contact_5') }}</p>
                <dl class="mt-10 space-y-4 text-base/7 text-gray-600 dark:text-gray-300">
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">{{ __('Location') }}</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="h-7 w-6 text-gray-400"><path d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" stroke-linecap="round" stroke-linejoin="round" /><path d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </dt>
                        <dd>{{ __('Limassol, Cyprus') }}<br />{{ __('(Events across all major Cyprus cities)') }}</dd>
                    </div>
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">{{ __('WhatsApp') }}</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="h-7 w-6 text-gray-400"><path d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </dt>
                        <dd><a href="https://chat.whatsapp.com/E5WIwfVPoHnFE3IDUHBF09" target="_blank" class="hover:text-gray-900 dark:hover:text-white">{{ __('Join our WhatsApp Community') }}</a></dd>
                    </div>
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">{{ __('Email') }}</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="h-7 w-6 text-gray-400"><path d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" stroke-linecap="round" stroke-linejoin="round" /></svg>
                        </dt>
                        <dd><a href="mailto:sfcommunitycy@gmail.com" class="hover:text-gray-900 dark:hover:text-white">sfcommunitycy@gmail.com</a></dd>
                    </div>
                    <div class="flex gap-x-4">
                        <dt class="flex-none">
                            <span class="sr-only">{{ __('LinkedIn') }}</span>
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-7 w-6 text-gray-400"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </dt>
                        <dd><a href="https://www.linkedin.com/groups/11837019/" target="_blank" class="hover:text-gray-900 dark:hover:text-white">{{ __('Follow us on LinkedIn') }}</a></dd>
                    </div>
                </dl>
                <div class="mt-10 pt-8 border-t border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">{{ __('Quick Links') }}</h3>
                    <div class="space-y-2">
                        <div><a href="{{ route('web::wa') }}" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">{{ __('Working Afternoons') }}</a></div>
                        <div><a href="{{ route('web::events') }}" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">{{ __('Events') }}</a></div>
                        <div><a href="{{ route('web::startups') }}" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">{{ __('Startups') }}</a></div>
                        <div><a href="{{ route('web::partnerships') }}" class="text-indigo-600 hover:text-indigo-500 dark:text-indigo-400">{{ __('Partnerships') }}</a></div>
                    </div>
                </div>
            </div>
        </div>
        <form id="contactForm" class="px-6 pt-20 pb-24 sm:pb-32 lg:px-8 lg:py-48">
            @csrf
            <div class="mx-auto max-w-xl lg:mr-0 lg:max-w-lg">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('First name') }} <span class="text-red-500">*</span></label>
                        <div class="mt-2.5">
                            <input id="first-name" type="text" name="first_name" autocomplete="given-name" required class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="first_name-error"></p>
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('Last name') }} <span class="text-red-500">*</span></label>
                        <div class="mt-2.5">
                            <input id="last-name" type="text" name="last_name" autocomplete="family-name" required class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="last_name-error"></p>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('Email') }} <span class="text-red-500">*</span></label>
                        <div class="mt-2.5">
                            <input id="email" type="email" name="email" autocomplete="email" required class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" />
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="email-error"></p>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone-number" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('Phone number') }}</label>
                        <div class="mt-2.5">
                            <input id="phone-number" type="tel" name="phone" autocomplete="tel" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" placeholder="+357" />
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="phone-error"></p>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('Company/Startup') }}</label>
                        <div class="mt-2.5">
                            <input id="company" type="text" name="company" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" placeholder="Optional" />
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="company-error"></p>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="interest" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __("I'm interested in") }}</label>
                        <div class="mt-2.5">
                            <select id="interest" name="interest" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:focus:outline-indigo-500">
                                <option value="">{{ __('Please select...') }}</option>
                                <option value="membership">{{ __('Community Membership') }}</option>
                                <option value="events">{{ __('Attending Events') }}</option>
                                <option value="working-afternoons">{{ __('Working Afternoons') }}</option>
                                <option value="mentorship">{{ __('Mentorship Program') }}</option>
                                <option value="partnership">{{ __('Partnership Opportunities') }}</option>
                                <option value="speaking">{{ __('Speaking at Events') }}</option>
                                <option value="sponsorship">{{ __('Sponsorship') }}</option>
                                <option value="other">{{ __('Other') }}</option>
                            </select>
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="interest-error"></p>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm/6 font-semibold text-gray-900 dark:text-white">{{ __('Message') }} <span class="text-red-500">*</span></label>
                        <div class="mt-2.5">
                            <textarea id="message" name="message" rows="4" required class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 dark:bg-white/5 dark:text-white dark:outline-white/10 dark:placeholder:text-gray-500 dark:focus:outline-indigo-500" placeholder="{{ __("Tell us about your startup journey, what you're looking for, or how you'd like to get involved with our community...") }}"></textarea>
                            <p class="mt-1 text-sm text-red-600 dark:text-red-400 error-message" id="message-error"></p>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex items-center gap-x-3">
                    <input id="newsletter" name="newsletter" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600 dark:border-gray-600 dark:bg-gray-900">
                    <label for="newsletter" class="text-sm text-gray-600 dark:text-gray-300">{{ __('Subscribe to our newsletter for startup events and resources') }}</label>
                </div>
                <div id="successMessage" class="hidden mt-6 p-4 rounded-md bg-green-50 border border-green-200 dark:bg-green-900/20 dark:border-green-700">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-green-800 dark:text-green-200">{{ __("Thank you! Your message has been sent successfully. We'll get back to you soon.") }}</p>
                        </div>
                    </div>
                </div>
                <div id="errorMessage" class="hidden mt-6 p-4 rounded-md bg-red-50 border border-red-200 dark:bg-red-900/20 dark:border-red-700">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" /></svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium text-red-800 dark:text-red-200" id="errorText">{{ __('Something went wrong. Please try again later.') }}</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex justify-end">
                    <button type="submit" id="submitBtn" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 dark:bg-indigo-500 dark:hover:bg-indigo-400 dark:focus-visible:outline-indigo-500 disabled:opacity-50 disabled:cursor-not-allowed">
                        <span id="submitText">{{ __('Send message') }}</span>
                        <span id="loadingText" class="hidden">
                            <svg class="animate-spin -ml-1 mr-3 h-4 w-4 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            {{ __('Sending...') }}
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const loadingText = document.getElementById('loadingText');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');
    const errorText = document.getElementById('errorText');

    // Clear all error messages
    function clearErrors() {
        document.querySelectorAll('.error-message').forEach(el => {
            el.textContent = '';
        });
        document.querySelectorAll('input, select, textarea').forEach(el => {
            el.classList.remove('outline-red-500', 'dark:outline-red-500');
        });
    }

    // Display validation errors
    function displayErrors(errors) {
        Object.keys(errors).forEach(field => {
            const errorElement = document.getElementById(field + '-error');
            const inputElement = document.querySelector(`[name="${field}"]`);

            if (errorElement && errors[field][0]) {
                errorElement.textContent = errors[field][0];
                if (inputElement) {
                    inputElement.classList.add('outline-red-500', 'dark:outline-red-500');
                }
            }
        });
    }

    // Hide messages
    function hideMessages() {
        successMessage.classList.add('hidden');
        errorMessage.classList.add('hidden');
    }

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Clear previous errors and messages
        clearErrors();
        hideMessages();

        // Show loading state
        submitBtn.disabled = true;
        submitText.classList.add('hidden');
        loadingText.classList.remove('hidden');

        const formData = new FormData(form);
        if (!document.getElementById('newsletter').checked) {
            formData.set('newsletter', '0');
        } else {
            formData.set('newsletter', '1');
        }

        // Send AJAX request
        fetch('{{ route('web::contact::submit') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || document.querySelector('input[name="_token"]').value
            }
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    successMessage.classList.remove('hidden');

                    // Reset form
                    form.reset();

                    // Scroll to success message
                    successMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
                } else {
                    throw new Error(data.message || '{{ __('Something went wrong') }}');
                }
            })
            .catch(error => {
                console.error('Error:', error);

                if (error.response) {
                    error.response.json().then(errorData => {
                        if (errorData.errors) {
                            // Validation errors
                            displayErrors(errorData.errors);
                        } else {
                            // General error
                            errorText.textContent = errorData.message || '{{ __('Something went wrong. Please try again.') }}';
                            errorMessage.classList.remove('hidden');
                        }
                    });
                } else {
                    // Network or other error
                    errorText.textContent = '{{ __('Network error. Please check your connection and try again.') }}';
                    errorMessage.classList.remove('hidden');
                }
            })
            .finally(() => {
                // Reset button state
                submitBtn.disabled = false;
                submitText.classList.remove('hidden');
                loadingText.classList.add('hidden');
            });
    });
});
</script>
@endsection
