@extends('layouts.app')

@section('content')
@if (empty(Auth::user()->profile->id))
    <div class="rounded-md bg-blue-50 p-4 mb-4">
        <div class="flex">
            <div class="shrink-0"><svg class="size-5 text-blue-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-7-4a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM9 9a.75.75 0 0 0 0 1.5h.253a.25.25 0 0 1 .244.304l-.459 2.066A1.75 1.75 0 0 0 10.747 15H11a.75.75 0 0 0 0-1.5h-.253a.25.25 0 0 1-.244-.304l.459-2.066A1.75 1.75 0 0 0 9.253 9H9Z" clip-rule="evenodd" /></svg></div>
            <div class="ml-3 flex-1 md:flex md:justify-between">
                <p class="text-sm text-blue-700">{{ __('app.index_profile_intro') }}</p>
                <p class="mt-3 text-sm md:mt-0 md:ml-6"><a href="{{ route('app::profile') }}" class="font-medium whitespace-nowrap text-blue-700 hover:text-blue-600">{{ __('Profile') }} <span aria-hidden="true"> &rarr;</span></a></p>
            </div>
        </div>
    </div>
@endif

@endsection
