@extends('layouts.auth')

@section('ldbread')
<script type="application/ld+json">
{
    "@@context": "https://schema.org",
    "@@type": "Service",
    "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'Tarot Academy')) }}",
    "url": "{{ url()->current() }}",
    "description": "{{ (!empty($meta->metas[$meta->locale]->description) ? $meta->metas[$meta->locale]->description : (!empty($meta->metas['en']->description) ? $meta->metas['en']->description : '')) }}",
    "areaServed": "Global",
    "provider": {
        "@@type": "Brand",
        "name": "{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'Tarot Academy')) }}"
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
        "item": "{{ str_replace('http://', 'https://', route('web::index')) }}"
    }]
},
{
    "@@context": "https://schema.org",
    "@@type": "BreadcrumbList",
    "itemListElement": [{
        "@@type": "ListItem",
        "position": 2,
        "name": "{{ __('Sign In') }}",
        "item": "{{ str_replace('http://', 'https://', route('reset', ['code' => 0])) }}"
    }]
}
</script>
@endsection

@section('content')
<div>
    <a href="{{ route('web::index') }}"><img class="h-10 w-auto" src="/assets/images/logo.png" alt="{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}" /></a>
    <h2 class="mt-8 text-2xl/9 font-bold tracking-tight text-gray-900">{{ __('Forgot Password?') }}</h2>
    <p class="mt-2 text-sm/6 text-gray-500">{{ __('Please set your new password...') }}</p>
</div>
<div class="mt-10">
    <div>
        @if (session('success'))
            <div class="px-4 py-3 rounded-md bg-success-500/20 border border-success-500/25 text-success-900 dark:text-success-300">{{ __('auth.restore_success') }} <a href="{{ route('login') }}" class="text-indigo-500">{{ __('Sign In') }}</a></div>
        @else
            <form action="{{ route('auth::reset', ['code' => $reset->token]) }}" class="space-y-6" method="POST">
                @csrf
                <div>
                    <label for="signIn_password" class="block text-sm/6 font-medium text-gray-900">{{ __('Password') }}</label>
                    <div class="mt-2">
                        <input name="password" required type="password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" id="signIn_password" placeholder="{{ __('Password') }}">
                    </div>
                </div>
                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Set Password') }}</button>
                </div>
            </form>
        @endif
    </div>
</div>
@endsection
