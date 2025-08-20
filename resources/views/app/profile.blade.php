@extends('layouts.app')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
<style>
.ql-container {
    border-radius: 0 0 0.375rem 0.375rem !important;
}
.ql-toolbar {
    border-radius: 0.375rem 0.375rem 0 0 !important;
}
.ql-container, .ql-toolbar {
    border-color: rgb(209 213 219) !important;
}
.ql-container.ql-focused {
    outline: 2px solid rgb(99 102 241) !important;
    outline-offset: -2px !important;
    border-color: rgb(99 102 241) !important;
}
</style>
@endsection

@section('content')
<nav class="flex mb-8" aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4">
        <li><div><a href="{{ route('web::index') }}" class="text-gray-400 hover:text-gray-500"><svg class="size-5 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M9.293 2.293a1 1 0 0 1 1.414 0l7 7A1 1 0 0 1 17 11h-1v6a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6H3a1 1 0 0 1-.707-1.707l7-7Z" clip-rule="evenodd" /></svg><span class="sr-only">{{ __('Home') }}</span></a></div></li>
        <li><div class="flex items-center"><svg class="size-5 shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" /></svg><a href="{{ route('app::index') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ __('Dashboard') }}</a></div></li>
        <li><div class="flex items-center"><svg class="size-5 shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" /></svg><a href="{{ route('app::profile') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{ __('Profile') }}</a></div></li>
    </ol>
</nav>
<form x-data="handleProfileSubmit()" @submit="submitForm">
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">{{ __('Profile') }}</h2>
            <p class="mt-1 text-sm/6 text-gray-600">{{ __('app.profile_private_title') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="username" class="block text-sm/6 font-medium text-gray-900">{{ __('Username') }}</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">sfccy.com/@</div>
                            <input type="text" name="username" id="username" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ Auth::user()->name }}" />
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">{{ __('Email') }}</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="email" name="email" id="email" class="block min-w-0 grow py-1.5 pl-3 pr-3 pl-1 bg-gray-100 text-base text-gray-500 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="mail@email.com" value="{{ Auth::user()->email }}" disabled="disabled"  />
                        </div>
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <label for="password" class="block text-sm/6 font-medium text-gray-900">{{ __('Password') }}</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="password" name="password" id="password" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="{{ __('New password') }}" />
                        </div>
                        <p class="mt-1 text-sm/6 text-gray-600">{{ __('Set your new password (optionally)') }}</p>
                    </div>
                </div>
                <div class="sm:col-span-3" x-data="avatarUpload()">
                    <label for="photo" class="block text-sm/6 font-medium text-gray-900">{{ __('Photo') }}</label>
                    <div x-show="showSuccess" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 transform scale-95" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-95" class="mb-2 rounded-md bg-green-50 p-4">
                        <div class="flex">
                            <div class="shrink-0"><svg class="size-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" /></svg></div>
                            <div class="ml-3"><p class="text-sm font-medium text-green-800" x-text="successMessage"></p></div>
                            <div class="ml-auto pl-3">
                                <div class="-mx-1.5 -my-1.5">
                                    <button type="button" @click="hideSuccess()" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50 focus:outline-hidden">
                                        <span class="sr-only">{{ __('Dismiss') }}</span>
                                        <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center gap-x-3">
                        <div class="relative">
                            <img x-show="previewUrl || avatarUrl" :src="previewUrl || avatarUrl" class="size-12 rounded-full object-cover ring-2 ring-gray-200" alt="Avatar">
                            <svg x-show="!previewUrl && !avatarUrl" class="size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"><path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" /></svg>
                            <div x-show="uploading" class="absolute inset-0 bg-black bg-opacity-50 rounded-full flex items-center justify-center"><svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg></div>
                        </div>
                        <input type="file" @change="uploadAvatar" accept="image/*" class="hidden" x-ref="fileInput">
                        <button type="button" @click="$refs.fileInput.click()" :disabled="uploading" class="rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-xs ring-1 ring-gray-300 ring-inset hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span x-show="!uploading">{{ __('Change') }}</span>
                            <span x-show="uploading">{{ __('Processing...') }}</span>
                        </button>
                    </div>
                    <div x-show="error" class="mt-2 text-sm text-red-600" x-text="error"></div>
                    <p class="mt-2 text-xs text-gray-500">{{ __('app.profile_avatar_description') }}</p>
                </div>
                {{--<div class="col-span-full">
                    <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Cover photo</label>
                    <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                        <div class="text-center">
                            <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" data-slot="icon">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm/6 text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>

        <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-base/7 font-semibold text-gray-900">{{ __('Public Information') }}</h2>
            <p class="mt-1 text-sm/6 text-gray-600">{{ __('app.profile_public_title') }}</p>
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="about" class="block text-sm/6 font-medium text-gray-900">{{ __('About') }}</label>
                    <div class="mt-2">
                        <textarea name="about" id="about" rows="3" class="hidden">{!! (!empty(Auth::user()->profile->about) ? Auth::user()->profile->about : '') !!}</textarea>
                        <div id="editor">
                            {!! (!empty($about_html) ? $about_html : '') !!}
                        </div>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">{{ __('Write a few sentences about yourself.') }}</p>
                </div>

                <div class="sm:col-span-3">
                    <label for="first-name" class="block text-sm/6 font-medium text-gray-900">{{ __('First name') }}</label>
                    <div class="mt-2">
                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="{{ __('First name') }}" value="{{ (!empty(Auth::user()->profile->first_name) ? Auth::user()->profile->first_name : '') }}" />
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="last-name" class="block text-sm/6 font-medium text-gray-900">{{ __('Last name') }}</label>
                    <div class="mt-2">
                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="{{ __('Last name') }}" value="{{ (!empty(Auth::user()->profile->last_name) ? Auth::user()->profile->last_name : '') }}" />
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="pe" class="block text-sm/6 font-medium text-gray-900">{{ __('Public Email') }}</label>
                    <div class="mt-2">
                        <input id="pe" name="pe" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="mail@email.com" value="{{ (!empty(Auth::user()->profile->public_email) ? Auth::user()->profile->public_email : '') }}" />
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="pp" class="block text-sm/6 font-medium text-gray-900">{{ __('Public Phone Number') }}</label>
                    <div class="mt-2">
                        <input id="pp" name="pp" type="tel" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="+12223334455" value="{{ (!empty(Auth::user()->profile->public_phone) ? Auth::user()->profile->public_phone : '') }}" />
                    </div>
                </div>

                <div class="sm:col-span-6" x-data="locationSelector()" data-profile-country="{{ Auth::user()->country->iso ?? 'UC' }}" data-profile-city-id="{{ Auth::user()->city_id ?? '' }}" data-profile-city-name="{{ Auth::user()->city->name ?? '' }}">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm/6 font-medium text-gray-900">{{ __('Country') }}</label>
                            <div class="relative mt-2">
                                <button type="button" @click="countryOpen = !countryOpen" class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-3 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" :aria-expanded="countryOpen">
                                <span class="col-start-1 row-start-1 flex items-center gap-3 pr-6">
                                    <img :src="selectedCountry.flag" :alt="selectedCountry.name" class="size-5 shrink-0 rounded-xl" />
                                    <span class="block truncate" x-text="selectedCountry.name"></span>
                                </span>
                                    <svg class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4 transition-transform duration-200" :class="{ 'rotate-180': countryOpen }" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" /></svg>
                                </button>
                                <div x-show="countryOpen" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="countryOpen = false" class="absolute z-10 bg-white max-h-60 w-full overflow-auto rounded-md bg-white text-base shadow-lg ring-1 ring-black/5 mt-1 focus:outline-hidden sm:text-sm">
                                    <div class="sticky top-0 bg-white p-2 border-b border-gray-300 z-20">
                                        <input type="text" x-model="countrySearch" @keydown.escape="open = false" placeholder="Search countries..." class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                    </div>
                                    <template x-for="country in filteredCountries" :key="country.code">
                                        <div @click="selectCountry(country)" class="relative cursor-pointer py-2 pr-9 pl-3 text-gray-900 hover:bg-gray-50 select-none" :class="{ 'bg-indigo-50 text-indigo-900': selectedCountry.code === country.code }">
                                            <div class="flex items-center">
                                                <img :src="country.flag" :alt="country.name" class="size-5 shrink-0 rounded-xl" />
                                                <span class="ml-3 block truncate font-normal" x-text="country.name"></span>
                                                {{--<span class="ml-2 text-gray-500 text-sm" x-text="'(' + country.code + ')'"></span>--}}
                                            </div>
                                            <span x-show="selectedCountry.code === country.code" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600"><svg class="size-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" /></svg></span>
                                        </div>
                                    </template>
                                    <div x-show="filteredCountries.length === 0" class="px-3 py-2 text-gray-500 text-sm">{{ __('No countries found') }}</div>
                                </div>
                            </div>
                            <input type="hidden" name="country" :value="selectedCountry.code">
                        </div>
                        <div>
                            <label class="block text-sm/6 font-medium text-gray-900">{{ __('City') }}</label>
                            <div class="relative mt-2">
                                <div class="relative">
                                    <input type="text" x-model="citySearch" x-model="citySearch" @input="handleCitySearch" @focus="handleCityFocus" :placeholder="selectedCountry.code && selectedCountry.code !== 'UC' ? '{{ __('Search for a city...') }}' : '{{ __('Select country') }}'" :disabled="!selectedCountry.code || selectedCountry.code === 'UC'" class="block w-full rounded-md bg-white px-3 py-1.5 pr-10 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 disabled:bg-gray-100 disabled:text-gray-400" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-3">
                                        <div x-show="searchingCities" class="animate-spin rounded-full h-4 w-4 border-b-2 border-indigo-600"></div>
                                        <svg x-show="!searchingCities" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" /></svg>
                                    </div>
                                </div>
                                <div x-show="showCityDropdown && (selectedCountry.code && selectedCountry.code !== 'UC')" x-transition x-ref="cityDropdown" class="absolute z-10 bg-white max-h-80 w-full overflow-auto rounded-md shadow-lg ring-1 ring-black/5 mt-1">
                                    <div x-show="!citySearch && popularCities.length > 0" class="border-b border-gray-100">
                                        <div class="px-3 py-2 text-xs font-medium text-gray-500 bg-gray-50 sticky top-0">{{ __('Popular Cities in') }} <span x-text="selectedCountry.name"></span></div>
                                        <template x-for="city in popularCities" :key="'popular-' + city.id">
                                            <div @mousedown.prevent="selectCity(city)" class="relative cursor-pointer py-1 px-3 text-gray-900 bg-white hover:bg-gray-50 select-none border-b border-gray-50 last:border-b-0">
                                                <div class="flex flex-col">
                                                    <span class="text-sm font-medium text-gray-900" x-text="city.name"></span>
                                                    <span class="text-xs text-gray-600" x-text="formatCityLocation(city)"></span>
                                                </div>
                                            </div>
                                        </template>
                                    </div>
                                    <div x-show="citySearch && searchResults.length > 0">
                                        <div class="px-3 py-2 text-xs font-medium text-gray-500 bg-gray-50 sticky top-0">{{ __('Search Results for') }} "<span x-text="citySearch"></span>"</div>
                                        <template x-for="city in searchResults" :key="'search-' + city.id">
                                            <div @mousedown.prevent="selectCity(city)" class="relative cursor-pointer py-1 px-3 text-gray-900 bg-white hover:bg-gray-50 select-none border-b border-gray-50 last:border-b-0">
                                                <div class="flex flex-col">
                                                    <span class="text-sm font-medium text-gray-900" x-text="city.name"></span>
                                                    <span class="text-xs text-gray-600" x-text="formatCityLocation(city)"></span>
                                                </div>
                                            </div>
                                        </template>
                                        <div x-show="searchResults.length >= 20" class="px-3 py-2 text-xs text-gray-500 bg-gray-50 text-center">{{ __('app.profile_popular_cities') }}</div>
                                    </div>
                                    <div x-show="citySearch && searchResults.length === 0 && !searchingCities" class="px-3 py-4 text-gray-500 text-sm text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                                        {{ __('app.profile_no_search') }} "<span x-text="citySearch" class="font-medium"></span>"<br>
                                        <span class="text-xs">{{ __('app.profile_no_search_2') }}</span>
                                    </div>
                                    <div x-show="searchingCities" class="px-3 py-4 text-gray-500 text-sm flex items-center justify-center">
                                        <div class="animate-spin rounded-full h-5 w-5 border-b-2 border-indigo-600 mr-3"></div>
                                        {{ __('Searching cities in') }} <span x-text="selectedCountry.name" class="font-medium ml-1"></span>...
                                    </div>
                                    <div x-show="!selectedCountry.code || selectedCountry.code === 'UC'" class="px-3 py-4 text-gray-500 text-sm text-center">{{ __('app.profile_city_search_2') }}</div>
                                </div>
                            </div>
                            <div x-show="selectedCity.id" class="mt-3 p-3 bg-green-50 border border-green-200 rounded-md">
                                <div class="flex items-start">
                                    <svg class="h-5 w-5 text-green-400 mt-0.5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                    <div class="flex-1">
                                        <div class="text-sm font-medium text-green-900" x-text="selectedCity.name"></div>
                                        <div class="text-xs text-green-700" x-text="formatCityLocation(selectedCity)"></div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="city_id" :value="selectedCity.id || ''">
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3" x-data="languageSelector()">
                    <label class="block text-sm/6 font-medium text-gray-900">{{ __('Languages You Know') }}</label>
                    <div class="relative mt-2">
                        <button type="button" @click="open = !open" class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-3 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" :aria-expanded="open">
                            <span class="col-start-1 row-start-1 flex items-center gap-3 pr-6"><span class="block truncate" x-text="selectedLanguages.length > 0 ? `{{ __('Languages selected:') }} ${selectedLanguages.length}` : '{{ __('Select languages...') }}'"></span></span>
                            <svg class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4 transition-transform duration-200" :class="{ 'rotate-180': open }" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false" class="absolute z-10 bg-white max-h-60 w-full overflow-auto rounded-md shadow-lg ring-1 ring-black/5 mt-1">
                            <div class="sticky top-0 bg-white p-2 border-b border-gray-300 z-20">
                                <input type="text" x-model="search" @keydown.escape="open = false" placeholder="{{ __('Search languages...') }}" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="sticky top-12 bg-white border-b border-gray-100 z-10">
                                <div class="flex justify-between items-center px-3 py-2">
                                    <button type="button" @click="selectAll()" class="text-xs text-indigo-600 hover:text-indigo-800 font-medium">{{ __('Select All') }}</button>
                                    <button type="button" @click="clearAll()" class="text-xs text-gray-600 hover:text-gray-800 font-medium">{{ __('Clear All') }}</button>
                                </div>
                            </div>
                            <template x-for="language in filteredLanguages" :key="language.code">
                                <div @click="toggleLanguage(language)" class="relative cursor-pointer py-1 pr-9 pl-3 text-gray-900 hover:bg-gray-50 select-none" :class="{ 'bg-indigo-50': isSelected(language.code) }">
                                    <div class="flex items-center">
                                        <img :src="language.flag" :alt="language.name" class="size-5 shrink-0 rounded-xl mr-3" />
                                        <div class="flex-1">
                                            <span class="block truncate text-sm" x-text="language.name"></span>
                                            <span class="block text-xs text-gray-500" x-text="language.native"></span>
                                        </div>
                                        <span x-show="isSelected(language.code)" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600"><svg class="size-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" /></svg></span>
                                    </div>
                                </div>
                            </template>
                            <div x-show="filteredLanguages.length === 0" class="px-3 py-2 text-gray-500 text-sm">{{ __('No languages found') }}</div>
                        </div>
                    </div>
                    <div x-show="selectedLanguages.length > 0" class="mt-3">
                        <div class="flex flex-wrap gap-2">
                            <template x-for="language in getSelectedLanguageObjects()" :key="language.code">
                            <span class="inline-flex items-center gap-x-1.5 rounded-full bg-indigo-100 px-2 py-1 text-xs font-medium text-indigo-700">
                                <img :src="language.flag" :alt="language.name" class="size-4 rounded-full" />
                                <span x-text="language.name"></span>
                                <button type="button" @click="removeLanguage(language.code)" class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-indigo-600/20">
                                    <span class="sr-only">{{ __('Remove') }}</span>
                                    <svg viewBox="0 0 14 14" class="h-3.5 w-3.5 stroke-indigo-700/50 group-hover:stroke-indigo-700/75"><path d="m4 4 6 6m0-6-6 6" /></svg>
                                </button>
                            </span>
                            </template>
                        </div>
                    </div>
                    <template x-for="languageCode in selectedLanguages" :key="languageCode"><input type="hidden" name="languages[]" :value="languageCode"></template>
                </div>

                <div class="sm:col-span-3">
                    <label for="fb" class="block text-sm/6 font-medium text-gray-900">Facebook</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">facebook.com/</div>
                            <input type="text" name="fb" id="fb" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->fb) ? Auth::user()->profile->fb : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="ig" class="block text-sm/6 font-medium text-gray-900">Instagram</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">instagram.com/</div>
                            <input type="text" name="ig" id="ig" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->ig) ? Auth::user()->profile->ig : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tk" class="block text-sm/6 font-medium text-gray-900">TikTok</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">tiktok.com/</div>
                            <input type="text" name="tk" id="tk" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->tk) ? Auth::user()->profile->tk : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="yt" class="block text-sm/6 font-medium text-gray-900">YouTube</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">youtube.com/</div>
                            <input type="text" name="yt" id="yt" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->yt) ? Auth::user()->profile->yt : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="fm" class="block text-sm/6 font-medium text-gray-900">Facebook Messenger</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">m.me/</div>
                            <input type="text" name="fm" id="fm" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->fm) ? Auth::user()->profile->fm : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="wa" class="block text-sm/6 font-medium text-gray-900">WhatsApp</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">wa.me/</div>
                            <input type="text" name="wa" id="wa" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->wa) ? Auth::user()->profile->wa : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tg" class="block text-sm/6 font-medium text-gray-900">Telegram</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">t.me/</div>
                            <input type="text" name="tg" id="tg" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->tg) ? Auth::user()->profile->tg : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="li" class="block text-sm/6 font-medium text-gray-900">LinkedIn</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">linkedin.com/in/</div>
                            <input type="text" name="li" id="li" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->li) ? Auth::user()->profile->li : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="th" class="block text-sm/6 font-medium text-gray-900">Threads</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">threads.com/</div>
                            <input type="text" name="th" id="th" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->th) ? Auth::user()->profile->th : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="tw" class="block text-sm/6 font-medium text-gray-900">Twitter (X)</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">x.com/</div>
                            <input type="text" name="tw" id="tw" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="username" value="{{ (!empty(Auth::user()->profile->tw) ? Auth::user()->profile->tw : '') }}" />
                        </div>
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="wb" class="block text-sm/6 font-medium text-gray-900">Website</label>
                    <div class="mt-2">
                        <div class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <div class="shrink-0 text-base text-gray-500 select-none sm:text-sm/6">https://</div>
                            <input type="text" name="wb" id="wb" class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6" placeholder="site.com" value="{{ (!empty(Auth::user()->profile->wb) ? Auth::user()->profile->wb : '') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div x-show="message" x-transition class="mt-4">
        <!-- Success Message -->
        <div x-show="messageType === 'success'" class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="size-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" /></svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800" x-text="message"></p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" @click="message = ''; messageType = ''" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50 focus:outline-hidden">
                            <span class="sr-only">{{ __('Dismiss') }}</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Error Message -->
        <div x-show="messageType === 'error'" class="rounded-md bg-red-50 p-4">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="size-5 text-red-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path fill-rule="evenodd" d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" /></svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-red-800" x-text="message"></p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" @click="message = ''; messageType = ''" class="inline-flex rounded-md bg-red-50 p-1.5 text-red-500 hover:bg-red-100 focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-red-50 focus:outline-hidden">
                            <span class="sr-only">{{ __('Dismiss') }}</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon"><path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">{{ __('Save') }}</button>
    </div>
</form>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
const toolbarOptions = [
    ['bold', 'italic'],
    ['blockquote'],
    [{'header': 1}, {'header': 2}],
    [{'list': 'ordered'}, {'list': 'bullet'}],
    ['clean']
];
const quill = new Quill('#editor', {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow',
    placeholder: '{{ __('Write a few sentences about yourself.') }}'
});
quill.on('text-change', () => {
    const html = quill.root.innerHTML;
    document.getElementById('about').value = html;
});
</script>
<script>
function makeSecureUrl(path) {
    @if (env('APP_ENV') == 'production')
    if (path.startsWith('/')) {
        return `https://${window.location.host}{{ ((LaravelLocalization::getCurrentLocale() != 'en') ? substr($_SERVER['REQUEST_URI'], 0, 3) : '') }}${path}`;
    }
    return path.replace(/^http:/, 'https:');
    @else
    if (path.startsWith('/')) {
        return `http://${window.location.host}{{ ((LaravelLocalization::getCurrentLocale() != 'en') ? substr($_SERVER['REQUEST_URI'], 0, 3) : '') }}${path}`;
    }
    return path;
    @endif
}

function avatarUpload() {
    return {
        avatarUrl: '{{ (!empty(Auth::user()->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr(Auth::user()->img, 0, 1) . '/' . substr(Auth::user()->img, 0, 2) . '/' . substr(Auth::user()->img, 0, 3) . '/th_' . Auth::user()->img : '/assets/images/no-user-image-icon.png') }}',
        uploading: false,
        error: '',
        previewUrl: null,
        showSuccess: false,
        successMessage: '',

        uploadAvatar(event) {
            const file = event.target.files[0];
            if (!file) return;

            // Reset states
            this.error = '';
            this.previewUrl = null;
            this.showSuccess = false;

            // Validate file
            if (!file.type.startsWith('image/')) {
                this.error = '{{ __('Please select an image file') }}';
                return;
            }

            if (file.size > 20 * 1024 * 1024) { // 20MB limit
                this.error = '{{ __('File size must be less than 20MB') }}';
                return;
            }

            // Show preview
            const reader = new FileReader();
            reader.onload = (e) => {
                this.previewUrl = e.target.result;
            };
            reader.readAsDataURL(file);

            this.uploading = true;

            const formData = new FormData();
            formData.append('avatar', file);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').content);

            fetch(makeSecureUrl('/app/profile/avatar'), {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        this.avatarUrl = data.avatar_url;
                        this.previewUrl = null;

                        // Update all avatar instances on page
                        document.querySelectorAll('.user-avatar').forEach(img => {
                            img.src = data.avatar_url;
                        });

                        // Show success message
                        this.showSuccessMessage(data.message || '{{ __('Avatar updated successfully!') }}');
                    } else {
                        this.error = data.message || '{{ __('Upload failed') }}';
                        this.previewUrl = null;
                    }
                })
                .catch(error => {
                    this.error = '{{ __('Network error occurred') }}';
                    this.previewUrl = null;
                    console.error('Error:', error);
                })
                .finally(() => {
                    this.uploading = false;
                    event.target.value = '';
                });
        },

        showSuccessMessage(message) {
            this.successMessage = message;
            this.showSuccess = true;

            // Auto-hide after 5 seconds
            setTimeout(() => {
                this.hideSuccess();
            }, 5000);
        },

        hideSuccess() {
            this.showSuccess = false;
            this.successMessage = '';
        }
    }
}

function locationSelector() {
    return {
        init() {
            // Initialize with profile data if available
            this.initializeFromProfile();

            // Use document click listener instead of Alpine's @click.away for better control
            document.addEventListener('click', (e) => {
                const cityDropdown = this.$refs.cityDropdown;
                const cityInput = e.target.closest('input[x-model="citySearch"]');

                // If click is outside both input and dropdown, close it
                if (!cityInput && cityDropdown && !cityDropdown.contains(e.target)) {
                    this.showCityDropdown = false;
                }
            });
        },

        // Method to initialize from user profile data
        async initializeFromProfile() {
            // Get profile data from server-side variables or data attributes
            const profileCountryCode = this.getProfileCountryCode();
            const profileCityId = this.getProfileCityId();
            const profileCityName = this.getProfileCityName();

            // Set country if available
            if (profileCountryCode && profileCountryCode !== 'UC') {
                const country = this.countries.find(c => c.code === profileCountryCode);
                if (country) {
                    this.selectedCountry = country;
                    await this.loadPopularCities(profileCountryCode);
                }
            }

            // Set city if available
            if (profileCityId && profileCityName) {
                // Try to find city in popular cities first
                let city = this.popularCities.find(c => c.id == profileCityId);

                // If not found in popular cities, fetch city details
                if (!city) {
                    city = await this.fetchCityById(profileCityId);
                }

                if (city) {
                    this.selectedCity = city;
                    this.citySearch = city.name;
                }
            }
        },

        // Helper methods to get profile data
        getProfileCountryCode() {
            // Option 1: From a data attribute on the form or container
            const container = document.querySelector('[x-data*="locationSelector"]');
            if (container && container.dataset.profileCountry) {
                return container.dataset.profileCountry;
            }

            // Option 2: From a hidden input field
            const countryInput = document.querySelector('input[name="country"]');
            if (countryInput && countryInput.value) {
                return countryInput.value;
            }

            // Option 3: From a global JavaScript variable (set by server)
            if (typeof window.profileData !== 'undefined' && window.profileData.country) {
                return window.profileData.country;
            }

            return null;
        },

        getProfileCityId() {
            // Similar options as above
            const container = document.querySelector('[x-data*="locationSelector"]');
            if (container && container.dataset.profileCityId) {
                return container.dataset.profileCityId;
            }

            const cityInput = document.querySelector('input[name="city_id"]');
            if (cityInput && cityInput.value) {
                return cityInput.value;
            }

            if (typeof window.profileData !== 'undefined' && window.profileData.city_id) {
                return window.profileData.city_id;
            }

            return null;
        },

        getProfileCityName() {
            const container = document.querySelector('[x-data*="locationSelector"]');
            if (container && container.dataset.profileCityName) {
                return container.dataset.profileCityName;
            }

            if (typeof window.profileData !== 'undefined' && window.profileData.city_name) {
                return window.profileData.city_name;
            }

            return null;
        },

        // Method to fetch city by ID if not in popular cities
        async fetchCityById(cityId) {
            try {
                const response = await fetch(makeSecureUrl(`/api/cities/${cityId}`), {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                if (response.ok) {
                    return await response.json();
                }
            } catch (error) {
                console.error('Error fetching city by ID:', error);
            }
            return null;
        },

        // Country properties
        countryOpen: false,
        countrySearch: '',
        selectedCountry: { code: 'UC', name: 'Unknown', flag: '/assets/flags/xx.svg' },

        // City properties
        citySearch: '',
        showCityDropdown: false,
        searchingCities: false,
        popularCities: [],
        searchResults: [],
        selectedCity: {},
        searchTimeout: null,

        // Your existing countries array (keep as is)
        countries: [
                @foreach($countries as $country)
            { code: '{{ $country->iso }}', name: '{{ $country->name }}', flag: '{{ '/assets/flags/' . strtolower($country->iso) . '.svg' }}' },
                @endforeach
            { code: 'UC', name: 'Unknown', flag: '/assets/flags/xx.svg' }
        ],

        // All your existing methods remain the same
        get filteredCountries() {
            let countries = this.countries;
            if (this.countrySearch) {
                const searchTerm = this.countrySearch.toLowerCase();
                countries = countries.filter(country =>
                    country.name.toLowerCase().includes(searchTerm) ||
                    country.code.toLowerCase().includes(searchTerm)
                );
            }
            return countries.sort((a, b) => a.name.localeCompare(b.name));
        },

        selectCountry(country) {
            this.selectedCountry = country;
            this.countryOpen = false;
            this.countrySearch = '';
            this.resetCityData();
            if (country.code !== 'UC') {
                this.loadPopularCities(country.code);
            }
        },

        resetCityData() {
            this.citySearch = '';
            this.searchResults = [];
            this.selectedCity = {};
            this.showCityDropdown = false;
            this.popularCities = [];
        },

        async loadPopularCities(countryCode) {
            try {
                const response = await fetch(makeSecureUrl(`/api/cities/popular/${countryCode}`), {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                if (response.ok) {
                    this.popularCities = await response.json();
                } else {
                    console.error('Failed to load popular cities:', response.statusText);
                    this.popularCities = [];
                }
            } catch (error) {
                console.error('Error loading popular cities:', error);
                this.popularCities = [];
            }
        },

        handleCitySearch() {
            if (!this.selectedCountry?.code || this.selectedCountry.code === 'UC') return;

            clearTimeout(this.searchTimeout);

            if (!this.citySearch.trim()) {
                this.searchResults = [];
                return;
            }

            this.searchTimeout = setTimeout(() => {
                this.searchCities(this.selectedCountry.code);
            }, 300);
        },

        handleCityFocus() {
            if (this.selectedCountry.code && this.selectedCountry.code !== 'UC') {
                this.showCityDropdown = true;
            }
        },

        async searchCities(countryCode) {
            if (!this.citySearch.trim() || !countryCode) return;

            this.searchingCities = true;
            try {
                const response = await fetch(makeSecureUrl(`/api/cities/search/${countryCode}?q=${encodeURIComponent(this.citySearch)}`), {
                    headers: {
                        'Accept': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                if (response.ok) {
                    this.searchResults = await response.json();
                } else {
                    console.error('Failed to search cities:', response.statusText);
                    this.searchResults = [];
                }
            } catch (error) {
                console.error('Error searching cities:', error);
                this.searchResults = [];
            } finally {
                this.searchingCities = false;
            }
        },

        selectCity(city) {
            this.selectedCity = city;
            this.citySearch = city.name;
            this.showCityDropdown = false;
        },

        handleCityBlur() {
            setTimeout(() => {
                this.showCityDropdown = false;
            }, 300);
        },

        formatCityLocation(city) {
            const parts = [];
            if (city.region_name) parts.push(city.region_name);
            if (city.subregion_name && city.subregion_name !== city.region_name) {
                parts.push(city.subregion_name);
            }
            return parts.join(', ') || city.name;
        }
    }
}

function languageSelector() {
    return {
        open: false,
        search: '',
        selectedLanguages: [], // Array of language codes

        languages: [
                @php
                    $languages = $meta->languages;
                    ksort($languages);
                @endphp
                @foreach ($languages as $key => $item)
            { code: '{{ $key }}', name: '{{ $item['name'] }}', native: '{{ $item['native'] }}', flag: '{{ asset('assets/flags/language/' . $key . '.svg') }}' },
            @endforeach
        ],

        get filteredLanguages() {
            if (!this.search) {
                return this.languages.sort((a, b) => a.name.localeCompare(b.name));
            }

            const searchTerm = this.search.toLowerCase();
            return this.languages.filter(language =>
                language.name.toLowerCase().includes(searchTerm) ||
                language.native.toLowerCase().includes(searchTerm) ||
                language.code.toLowerCase().includes(searchTerm)
            ).sort((a, b) => a.name.localeCompare(b.name));
        },

        toggleLanguage(language) {
            const index = this.selectedLanguages.indexOf(language.code);
            if (index > -1) {
                // Remove language
                this.selectedLanguages.splice(index, 1);
            } else {
                // Add language
                this.selectedLanguages.push(language.code);
            }
        },

        removeLanguage(languageCode) {
            const index = this.selectedLanguages.indexOf(languageCode);
            if (index > -1) {
                this.selectedLanguages.splice(index, 1);
            }
        },

        isSelected(languageCode) {
            return this.selectedLanguages.includes(languageCode);
        },

        selectAll() {
            this.selectedLanguages = this.filteredLanguages.map(lang => lang.code);
        },

        clearAll() {
            this.selectedLanguages = [];
        },

        getSelectedLanguageObjects() {
            return this.selectedLanguages.map(code =>
                this.languages.find(lang => lang.code === code)
            ).filter(lang => lang); // Filter out any undefined results
        },

        // Initialize with some default values (optional)
        init() {
            // Uncomment to set default selected languages
            @php
                if (!empty(Auth::user()->languages)) {
                    $selectedLanguages = '';
                    foreach (Auth::user()->languages as $key => $lang) {
                        if (!empty($selectedLanguages)) {
                            $selectedLanguages .= ',';
                        }
                        $selectedLanguages .= "'" . $lang->language_code . "'";
                    }
                }
            @endphp
                this.selectedLanguages = [{!! (!empty($selectedLanguages) ? $selectedLanguages : '') !!}];
        }
    }
}

function handleProfileSubmit() {
    return {
        submitting: false,
        message: '',
        messageType: '',

        async submitForm(event) {
            event.preventDefault();

            if (this.submitting) return;

            this.submitting = true;
            this.message = '';
            this.messageType = '';

            const form = event.target;
            const formData = new FormData(form);

            try {
                const response = await fetch(makeSecureUrl('/app/profile/save'), {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    }
                });

                const result = await response.json();

                if (result.success) {
                    this.message = result.message || '{{ __('Profile saved successfully!') }}';
                    this.messageType = 'success';
                } else {
                    this.message = result.message || '{{ __('An error occurred while saving') }}';
                    this.messageType = 'error';
                }

            } catch (error) {
                this.message = '{{ __('Network error occurred') }}';
                this.messageType = 'error';
                console.error('Error:', error);
            } finally {
                this.submitting = false;

                // Auto-hide message after 8 seconds
                setTimeout(() => {
                    this.message = '';
                    this.messageType = '';
                }, 8000);
            }
        },

        // Method to manually dismiss message
        dismissMessage() {
            this.message = '';
            this.messageType = '';
        }
    }
}
</script>
@endsection
