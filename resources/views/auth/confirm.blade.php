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
        "item": "{{ str_replace('http://', 'https://', route('confirm', ['code' => '0'])) }}"
    }]
}
</script>
@endsection

@section('content')
<div>
    <a href="{{ route('web::index') }}"><img class="h-10 w-auto mb-12" src="/assets/images/logo.png" alt="{{ (!empty($meta->metas[$meta->locale]->name) ? $meta->metas[$meta->locale]->name : (!empty($meta->metas['en']->name) ? $meta->metas['en']->name : 'SFC.CY')) }}" /></a>
    <h2 class="mb-4 text-3xl xl:text-4xl font-medium">{{ __('Email Confirmation') }}</h2>
    <p class="mb-5 text-gray-600 dark:text-gray-300">{{ __('Please confirm your email...') }}</p>
    <div class="px-4 py-2 bg-red-500/20 mb-4 border border-red-500/10 rounded-md" role="alert">{{ __('Something went wrong or your email was already confirmed.') }}</div>
</div>
@endsection
