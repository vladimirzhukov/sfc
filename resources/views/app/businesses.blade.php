@extends('layouts.app')

@section('content')
<nav class="flex mb-8" aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4">
        <li><div><a href="{{ route('web::index') }}" class="text-gray-400 hover:text-gray-500"><svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" /></svg><span class="sr-only">Home</span></a></div></li>
        <li><div class="flex items-center"><svg class="size-5 shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" /></svg><a href="{{ route('app::index') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ __('Dashboard') }}</a></div></li>
        <li><div class="flex items-center"><svg class="size-5 shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" /></svg><a href="{{ route('app::business') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{ __('Business') }}</a></div></li>
    </ol>
</nav>
<div class="space-y-12">
    @if (!empty($businesses) && $businesses->isNotEmpty())
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-gray-900">{{ __('Businesses') }}</h1>
                <p class="mt-2 text-sm text-gray-700">{{ __('app.business_listing') }}</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('app::business::create') }}" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">{{ __('Add Business') }}</a>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">{{ __('Business') }}</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{ __('Categories') }}</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">{{ __('Status') }}</th>
                            <th scope="col" class="relative py-3.5 pr-4 pl-3 sm:pr-0"><span class="sr-only">{{ __('Edit') }}</span></th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($businesses as $business)
                            <tr>
                                <td class="py-5 pr-3 pl-4 text-sm sm:pl-0 w-1/3">
                                    <div class="flex items-center">
                                        <div class="size-11 shrink-0">
                                            <img src="{{ (!empty($business->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/business/' . substr($business->img, 0, 1) . '/' . substr($business->img, 0, 2) . '/' . substr($business->img, 0, 3) . '/th_' . $business->img : '/assets/images/no-image-icon.png') }}" alt="{{ $business->name }}" class="size-11 rounded-full" />
                                        </div>
                                        <div class="ml-4 rtl:mr-4 rtl:ml-0">
                                            <div class="font-medium text-gray-900">{{ $business->name }}</div>
                                            <div class="mt-1 text-gray-500">{{ (!empty($business->description_html) ? mb_substr(strip_tags($business->description_html), 0, 100) : '') }}...</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-500">
                                    @if (!empty($business->categories) && $business->categories != '[]')
                                        @php
                                        $categories = explode('][', trim($business->categories, '[]'));
                                        @endphp
                                        @foreach ($categories as $category)
                                            @php
                                            if (LaravelLocalization::getCurrentLocale() != 'en') {
                                                $names = json_decode($businessCategories[$category]->name_translations, true);
                                                $name = $names[LaravelLocalization::getCurrentLocale()] ?? $businessCategories[$category]->name;
                                            } else {
                                                $name = $businessCategories[$category]->name;
                                            }
                                            @endphp
                                            <span class="inline-flex items-center rounded-md bg-gray-100 px-2 py-1 text-xs font-medium text-gray-600 mr-2">{{ $name }}</span>
                                        @endforeach
                                    @endif
                                </td>
                                <td class="px-3 py-5 text-sm whitespace-nowrap text-gray-500">
                                    @if (!empty($business->active))
                                        <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-green-600/20 ring-inset">{{ __('Active') }}</span>
                                    @else
                                        <span class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-red-600/20 ring-inset">{{ __('Inactive') }}</span>
                                    @endif
                                </td>
                                <td class="relative py-5 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-0"><a href="{{ route('app::business::edit', ['id' => $business->id]) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Edit') }}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="text-center">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" aria-hidden="true" class="mx-auto size-12 text-gray-400"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/></svg>
            <h3 class="mt-2 text-sm font-semibold text-gray-900">{{ __('No business') }}</h3>
            <p class="mt-1 text-sm text-gray-500">{{ __('Get started by adding your business.') }}</p>
            <div class="mt-6"><a href="{{ route('app::business::create') }}" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="mr-1.5 -ml-0.5 size-5"><path d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" /></svg> {{ __('Add Business') }}</a></div>
        </div>
    @endif
</div>
@endsection

@section('js')
@endsection
