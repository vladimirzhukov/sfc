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
        <li><div class="flex items-center"><svg class="size-5 shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" /></svg><a href="{{ route('app::services') }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{ __('Services') }}</a></div></li>
        <li><div class="flex items-center"><svg class="size-5 shrink-0 text-gray-300" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true"><path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z" /></svg><a href="{{ ((Route::currentRouteName() == 'app::services::create') ? route('app::services::create') : route('app::services::edit', ['id' => $service->id])) }}" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700" aria-current="page">{{ ((Route::currentRouteName() == 'app::services::create') ? __('Create Service') : __('Edit Service')) }}</a></div></li>
    </ol>
</nav>
<form action="{{ route('app::services::save') }}" method="POST">
    @if (session('success'))
        <div x-data="{ show: true }" x-show="show" x-transition class="rounded-md bg-green-50 p-4 mb-4">
            <div class="flex">
                <div class="shrink-0"><svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 text-green-400"><path d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z" clip-rule="evenodd" fill-rule="evenodd" /></svg></div>
                <div class="ml-3"><p class="text-sm font-medium text-green-800">{{ __('Service saved successfully!') }}</p></div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" @click="show = false" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50 focus:outline-hidden">
                            <span class="sr-only">{{ __('Dismiss') }}</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5"><path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session('error'))
        <div x-data="{ show: true }" x-show="show" x-transition class="rounded-md bg-red-50 p-4 mb-4">
            <div class="flex">
                <div class="shrink-0"><svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 text-red-400"><path d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM8.28 7.22a.75.75 0 0 0-1.06 1.06L8.94 10l-1.72 1.72a.75.75 0 1 0 1.06 1.06L10 11.06l1.72 1.72a.75.75 0 1 0 1.06-1.06L11.06 10l1.72-1.72a.75.75 0 0 0-1.06-1.06L10 8.94 8.28 7.22Z" clip-rule="evenodd" fill-rule="evenodd" /></svg></div>
                <div class="ml-3"><p class="text-sm font-medium text-red-800">{{ session('error') }}</p></div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button" @click="show = false" class="inline-flex rounded-md bg-red-50 p-1.5 text-red-500 hover:bg-red-100 focus:ring-2 focus:ring-red-600 focus:ring-offset-2 focus:ring-offset-red-50 focus:outline-hidden">
                            <span class="sr-only">{{ __('Dismiss') }}</span>
                            <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5"><path d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" /></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @csrf
    <input type="hidden" name="id" value="{{ (!empty($service->id) ? $service->id : '') }}">
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-6">
            <h2 class="text-base/7 font-semibold text-gray-900">{{ ((Route::currentRouteName() == 'app::services::create') ? __('Create Service') : __('Edit Service')) }}</h2>
            @if (Route::currentRouteName() == 'app::services::create')
                <p class="mt-1 text-sm/6 text-gray-600">{{ __('app.service_create_noto') }}</p>
            @else
                <p class="mt-1 text-sm/6 text-gray-600">{{ __('app.service_edit_noto') }}</p>
            @endif
            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="name" class="block text-sm/6 font-medium text-gray-900">{{ __('Service title') }}</label>
                    <div class="mt-2">
                        <input type="text" name="name" id="name" autocomplete="title" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="{{ __('Service title') }}" value="{{ (!empty($service->name) ? $service->name : '') }}" />
                    </div>
                </div>

                <div class="sm:col-span-3" x-data="avatarUpload()">
                    <label for="photo" class="block text-sm/6 font-medium text-gray-900">{{ __('Image') }}</label>
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
                            <img x-show="previewUrl || avatarUrl" :src="previewUrl || avatarUrl" class="size-12 rounded-full object-cover ring-2 ring-gray-200 service-avatar" alt="Service Image">
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

                <div class="sm:col-span-6" x-data="categorySelector()">
                    <label class="block text-sm/6 font-medium text-gray-900">{{ __('Service Categories') }} ({{ __('Maximum 5') }})</label>
                    <div class="relative mt-2">
                        <button type="button" @click="open = !open" class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-3 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" :aria-expanded="open">
                            <span class="col-start-1 row-start-1 flex items-center gap-3 pr-6">
                                <span class="block truncate" x-text="selectedCategories.length > 0 ? `{{ __('Categories selected') }}: ${selectedCategories.length}/5` : '{{ __('Select service categories') }} ({{ __('max 5') }})...'"></span>
                            </span>
                            <svg class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4 transition-transform duration-200" :class="{ 'rotate-180': open }" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false" class="absolute z-10 bg-white max-h-80 w-full overflow-auto rounded-md shadow-lg border-1 border-gray-300 mt-1">
                            <div class="sticky top-0 bg-white p-3 border-b border-gray-200 z-20">
                                <input type="text" x-model="search" @keydown.escape="open = false" placeholder="{{ __('Search categories...') }}" class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="sticky top-15 bg-white border-b border-gray-100 z-20">
                                <div class="flex justify-between items-center px-3 py-2">
                                    <button type="button" @click="selectAll()" :disabled="isMaxSelected()" class="text-xs font-medium disabled:text-gray-400 disabled:cursor-not-allowed" :class="isMaxSelected() ? 'text-gray-400' : 'text-indigo-600 hover:text-indigo-800'">{{ __('Select Top 5') }}</button>
                                    <div class="text-xs text-gray-500">
                                        <span x-text="selectedCategories.length"></span>/5 {{ __('selected') }}
                                    </div>
                                    <button type="button" @click="clearAll()" class="text-xs text-gray-600 hover:text-gray-800 font-medium">{{ __('Clear All') }}</button>
                                </div>
                            </div>
                            <template x-for="group in filteredCategories" :key="group.groupName">
                                <div class="border-b border-gray-50 last:border-b-0">
                                    <div class="px-3 py-2 bg-gray-50 text-xs font-medium text-gray-700 uppercase tracking-wide sticky top-23 z-10"><span x-text="group.groupName"></span></div>
                                    <template x-for="category in group.categories" :key="category.code">
                                        <div @click="toggleCategory(category)" class="relative cursor-pointer py-2 pr-9 pl-3 text-gray-900 select-none border-b border-gray-50 last:border-b-0" :class="{'bg-indigo-50': isSelected(category.code), 'hover:bg-gray-50': !isSelected(category.code) && !isMaxSelected(), 'opacity-50 cursor-not-allowed': !isSelected(category.code) && isMaxSelected()}">
                                            <div class="flex items-start">
                                                <div class="flex-1 min-w-0">
                                                    <span class="block text-sm font-medium text-gray-900" x-text="category.name"></span>
                                                    <span class="block text-xs text-gray-500 mt-1" x-text="category.description"></span>
                                                </div>
                                                <span x-show="isSelected(category.code)" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600"><svg class="size-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" /></svg></span>
                                                <span x-show="!isSelected(category.code) && isMaxSelected()" class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400"><svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364l12.728-12.728" /></svg></span>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                            <div x-show="filteredCategories.length === 0" class="px-3 py-4 text-gray-500 text-sm text-center">
                                <svg class="mx-auto h-8 w-8 text-gray-400 mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg> {{ __('No categories found for') }} "<span x-text="search" class="font-medium"></span>"
                            </div>
                        </div>
                    </div>
                    <div x-data="{ forceShow: true }" x-show="(selectedCategories.length > 0) || forceShow" class="mt-3">
                        <div class="flex flex-wrap gap-2 max-h-32 overflow-y-auto">
                            <template x-for="categoryCode in selectedCategories" :key="categoryCode">
                                <span class="inline-flex items-center gap-x-1.5 rounded-full bg-indigo-100 px-3 py-1 text-xs font-medium text-indigo-700">
                                    <span x-text="categories.find(cat => cat.code == categoryCode)?.name || `Code: ${categoryCode}`"></span>
                                    <button type="button" @click="removeCategory(categoryCode); if(selectedCategories.length === 0) forceShow = false;" class="group relative -mr-1 h-3.5 w-3.5 rounded-sm hover:bg-indigo-600/20 cursor-pointer">
                                        <span class="sr-only">{{ __('Remove') }}</span>
                                        <svg viewBox="0 0 14 14" class="h-3.5 w-3.5 stroke-indigo-700/50 group-hover:stroke-indigo-700/75"><path d="m4 4 6 6m0-6-6 6" /></svg>
                                    </button>
                                </span>
                            </template>
                        </div>
                        <p class="mt-2 text-xs text-gray-600">{{ __('Selected') }} <span x-text="selectedCategories.length"></span> {{ __('of 5 categories') }}.
                            <span x-show="getRemainingSlots() > 0">{{ __('You can select') }} <span x-text="getRemainingSlots()"></span> {{ __('more') }}.</span>
                            <span x-show="getRemainingSlots() === 0" class="text-amber-600 font-medium">{{ __('Maximum categories selected.') }}</span>
                        </p>
                    </div>
                    <div x-show="isMaxSelected()" class="mt-3 p-3 bg-amber-50 border border-amber-200 rounded-md">
                        <div class="flex">
                            <svg class="h-5 w-5 text-amber-400 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.732 15.5c-.77.833.192 2.5 1.732 2.5z" /></svg>
                            <div class="text-sm text-amber-800">
                                <p class="font-medium">{{ __('Maximum categories reached') }}</p>
                                <p class="text-xs mt-1">{{ __('app.service_max_categories_message') }}</p>
                            </div>
                        </div>
                    </div>
                    <template x-for="categoryCode in selectedCategories" :key="categoryCode">
                        <input type="hidden" name="categories[]" :value="categoryCode">
                    </template>
                </div>

                <div class="sm:col-span-6" x-data="serviceLanguageSelector()">
                    <label class="block text-sm/6 font-medium text-gray-900">{{ __('Service Languages') }} ({{ __('Maximum 10') }})</label>
                    <p class="mt-1 text-sm text-gray-600">{{ __('Select the languages in which your service can communicate with clients') }}</p>
                    <div class="relative mt-2">
                        <button type="button" @click="open = !open" class="grid w-full cursor-default grid-cols-1 rounded-md bg-white py-1.5 pr-3 pl-3 text-left text-gray-900 outline-1 -outline-offset-1 outline-gray-300 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" :aria-expanded="open">
                            <span class="col-start-1 row-start-1 flex items-center gap-3 pr-6"><span class="block truncate" x-text="selectedLanguages.length > 0 ? `{{ __('Languages selected:') }} ${selectedLanguages.length}/10` : '{{ __('Select service languages...') }}'"></span></span>
                            <svg class="col-start-1 row-start-1 size-5 self-center justify-self-end text-gray-500 sm:size-4 transition-transform duration-200" :class="{ 'rotate-180': open }" viewBox="0 0 16 16" fill="currentColor"><path fill-rule="evenodd" d="M5.22 10.22a.75.75 0 0 1 1.06 0L8 11.94l1.72-1.72a.75.75 0 1 1 1.06 1.06l-2.25 2.25a.75.75 0 0 1-1.06 0l-2.25-2.25a.75.75 0 0 1 0-1.06ZM10.78 5.78a.75.75 0 0 1-1.06 0L8 4.06 6.28 5.78a.75.75 0 0 1-1.06-1.06l2.25-2.25a.75.75 0 0 1 1.06 0l2.25 2.25a.75.75 0 0 1 0 1.06Z" clip-rule="evenodd" /></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" @click.away="open = false" class="absolute z-10 bg-white max-h-60 w-full overflow-auto rounded-md shadow-lg ring-1 ring-black/5 mt-1">
                            <div class="sticky top-0 bg-white p-2 border-b border-gray-300 z-20">
                                <input type="text" x-model="search" @keydown.escape="open = false" placeholder="{{ __('Search languages...') }}" class="w-full px-3 py-1.5 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="sticky top-12 bg-white border-b border-gray-100 z-10">
                                <div class="flex justify-between items-center px-3 py-2">
                                    <button type="button" @click="selectTop10()" :disabled="isMaxSelected()" class="text-xs font-medium disabled:text-gray-400 disabled:cursor-not-allowed" :class="isMaxSelected() ? 'text-gray-400' : 'text-indigo-600 hover:text-indigo-800'">{{ __('Select Top 10') }}</button>
                                    <div class="text-xs text-gray-500">
                                        <span x-text="selectedLanguages.length"></span>/10 {{ __('selected') }}
                                    </div>
                                    <button type="button" @click="clearAll()" class="text-xs text-gray-600 hover:text-gray-800 font-medium">{{ __('Clear All') }}</button>
                                </div>
                            </div>
                            <template x-for="language in filteredLanguages" :key="language.code">
                                <div @click="toggleLanguage(language)" class="relative cursor-pointer py-1 pr-9 pl-3 text-gray-900 select-none" :class="{'bg-indigo-50': isSelected(language.code), 'hover:bg-gray-50': !isSelected(language.code) && !isMaxSelected(), 'opacity-50 cursor-not-allowed': !isSelected(language.code) && isMaxSelected()}">
                                    <div class="flex items-center">
                                        <img :src="language.flag" :alt="language.name" class="size-5 shrink-0 rounded-xl mr-3" />
                                        <div class="flex-1">
                                            <span class="block truncate text-sm" x-text="language.name"></span>
                                            <span class="block text-xs text-gray-500" x-text="language.native"></span>
                                        </div>
                                        <span x-show="isSelected(language.code)" class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600"><svg class="size-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 0 1 .143 1.052l-8 10.5a.75.75 0 0 1-1.127.075l-4.5-4.5a.75.75 0 0 1 1.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 0 1 1.05-.143Z" clip-rule="evenodd" /></svg></span>
                                        <span x-show="!isSelected(language.code) && isMaxSelected()" class="absolute inset-y-0 right-0 flex items-center pr-4 text-gray-400"><svg class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728L5.636 5.636m12.728 12.728L18.364 5.636M5.636 18.364l12.728-12.728" /></svg></span>
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
                        <p class="mt-2 text-xs text-gray-600">{{ __('Selected') }} <span x-text="selectedLanguages.length"></span> {{ __('of 10 languages') }}.
                            <span x-show="getRemainingSlots() > 0">{{ __('You can select') }} <span x-text="getRemainingSlots()"></span> {{ __('more') }}.</span>
                            <span x-show="getRemainingSlots() === 0" class="text-amber-600 font-medium">{{ __('Maximum languages selected.') }}</span>
                        </p>
                    </div>
                    <div x-show="isMaxSelected()" class="mt-3 p-3 bg-amber-50 border border-amber-200 rounded-md">
                        <div class="flex">
                            <svg class="h-5 w-5 text-amber-400 mt-0.5 mr-2 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.732 15.5c-.77.833.192 2.5 1.732 2.5z" /></svg>
                            <div class="text-sm text-amber-800">
                                <p class="font-medium">{{ __('Maximum languages reached') }}</p>
                                <p class="text-xs mt-1">{{ __('app.service_language_1') }}</p>
                            </div>
                        </div>
                    </div>
                    <template x-for="languageCode in selectedLanguages" :key="languageCode">
                        <input type="hidden" name="languages[]" :value="languageCode">
                    </template>
                    <div class="mt-3 p-3 bg-blue-50 rounded-md border border-blue-200">
                        <div class="flex">
                            <svg class="h-5 w-5 text-blue-400 mt-0.5 mr-2 rtl:ml-2 rtl:mr-0 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <div class="text-sm text-blue-800">
                                <p class="font-medium mb-1">{{ __('Language Selection Tips:') }}</p>
                                <ul class="text-xs space-y-1">
                                    <li>{!! __('app.service_tip_5') !!}</li>
                                    <li>{!! __('app.service_tip_6') !!}</li>
                                    <li>{!! __('app.service_tip_7') !!}</li>
                                    <li>{!! __('app.service_tip_8') !!}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-gray-900">{{ __('Description') }}</label>
                    <div class="mt-2">
                        <textarea name="description" id="description" rows="3" class="hidden" placeholder="{{ __('Description') }}">{!! (!empty($service->description) ? $service->description : '') !!}</textarea>
                        <div id="editor">
                            {!! (!empty($service->description_html) ? $service->description_html : '') !!}
                        </div>
                    </div>
                    <p class="mt-3 text-sm/6 text-gray-600">{{ __('Write a few sentences about your service.') }}</p>
                </div>

                <div class="col-span-full mt-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="active" name="active" value="1" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" {{ (old('active', $service->active ?? true)) ? 'checked' : '' }}>
                        <label for="active" class="ml-2 rtl:mr-2 block text-sm text-gray-900 font-medium">{{ __('Active') }}</label>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">{{ __('app.service_active') }}</p>
                    <div class="mt-3 p-3 bg-blue-50 rounded-md border border-blue-200">
                        <div class="flex">
                            <svg class="h-5 w-5 text-blue-400 mt-0.5 mr-2 rtl:ml-2 rtl:mr-0 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <div class="text-sm text-blue-800">
                                <p class="font-medium mb-1">{{ __('Service Visibility:') }}</p>
                                <ul class="text-xs space-y-1">
                                    <div>
                                        <li>{!! __('app.service_tip_1') !!}</li>
                                        <li>{!! __('app.service_tip_2') !!}</li>
                                        <li>{!! __('app.service_tip_3') !!}</li>
                                        <li>{!! __('app.service_tip_4') !!}</li>
                                    </div>
                                </ul>
                            </div>
                        </div>
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
    placeholder: '{{ __('Enter your service description...') }}'
});
quill.on('text-change', () => {
    const html = quill.root.innerHTML;
    document.getElementById('description').value = html;
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
        avatarUrl: '{{ (!empty($service->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/services/' . substr($service->img, 0, 1) . '/' . substr($service->img, 0, 2) . '/' . substr($service->img, 0, 3) . '/th_' . $service->img : '/assets/images/no-image-icon.png') }}',
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

            fetch(makeSecureUrl('/app/services/image?serviceID={{ (!empty($service->id) ? $service->id : 0) }}'), {
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
                    @if (!empty($service->id))
                    if (data.success) {
                        this.avatarUrl = data.avatar_url;
                        this.previewUrl = null;

                        // Update all avatar instances on page
                        document.querySelectorAll('.service-avatar').forEach(img => {
                            img.src = data.avatar_url;
                        });

                        // Show success message
                        this.showSuccessMessage(data.message || '{{ __('Image updated successfully!') }}');
                    } else {
                        this.error = data.message || '{{ __('Upload failed') }}';
                        this.previewUrl = null;
                    }
                    @else
                    if (data.success) {
                        window.location.replace('/app/services/edit/' + data.id);
                    } else {
                        this.error = data.message || '{{ __('Upload failed') }}';
                        this.previewUrl = null;
                    }
                    @endif
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

function categorySelector() {
    return {
        open: false,
        search: '',
        selectedCategories: [],
        categories: [
            @php
            $cats = '';
            // Use the properly sorted categories from the controller
            foreach ($parentCategories as $pkey => $parent) {
                if (isset($categories[$pkey])) {
                    foreach ($categories[$pkey] as $key => $category) {
                        if (!empty($cats)) {
                            $cats .= ',';
                        }
                        $ord = $rawCategories[$key]->ord ?? 0;
                        $cats .= '{code: "' . $key . '", name: "' . addslashes($category) . '", group: "' . addslashes($parent) . '", description: "' . addslashes($categoryDescriptions[$key] ?? '') . '", ord: ' . $ord . '}';
                    }
                }
            }
            @endphp
            {!! $cats !!}
        ],

        get filteredCategories() {
            let categories = this.categories;

            // Apply search filter if search term exists
            if (this.search) {
                const searchTerm = this.search.toLowerCase();
                categories = categories.filter(category =>
                    category.name.toLowerCase().includes(searchTerm) ||
                    category.group.toLowerCase().includes(searchTerm) ||
                    category.description.toLowerCase().includes(searchTerm) ||
                    category.code.toLowerCase().includes(searchTerm)
                );
            }

            // Group categories by parent
            const grouped = categories.reduce((acc, category) => {
                if (!acc[category.group]) {
                    acc[category.group] = [];
                }
                acc[category.group].push(category);
                return acc;
            }, {});

            // Sort groups - categories are already sorted by ord in PHP, so maintain that order
            const sortedGroups = Object.keys(grouped).sort((a, b) => {
                // Get the ord value of the first category in each group to determine group ordering
                const aOrd = grouped[a][0]?.ord || 0;
                const bOrd = grouped[b][0]?.ord || 0;

                // If ord values are different, sort by ord (0 before 1)
                if (aOrd !== bOrd) {
                    return aOrd - bOrd;
                }

                // If same ord, sort alphabetically
                return a.localeCompare(b);
            });

            // Return grouped and sorted categories
            return sortedGroups.map(groupName => ({
                groupName,
                categories: grouped[groupName].sort((a, b) => {
                    // Sort by ord first (0 before 1), then alphabetically
                    if (a.ord !== b.ord) {
                        return a.ord - b.ord;
                    }
                    return a.name.localeCompare(b.name);
                })
            }));
        },

        toggleCategory(category) {
            const index = this.selectedCategories.indexOf(category.code);
            if (index > -1) {
                this.selectedCategories.splice(index, 1);
            } else {
                if (this.selectedCategories.length >= 5) {
                    return;
                }
                this.selectedCategories.push(category.code);
            }
        },

        removeCategory(categoryCode) {
            const index = this.selectedCategories.indexOf(categoryCode);
            if (index > -1) {
                this.selectedCategories.splice(index, 1);
            }
        },

        isSelected(categoryCode) {
            return this.selectedCategories.includes(categoryCode);
        },

        selectAll() {
            // Select first 5 categories from the properly sorted list (ord=0 categories first)
            const regularCategories = this.categories.filter(cat => cat.ord === 0).slice(0, 5);
            this.selectedCategories = regularCategories.map(cat => cat.code);
        },

        clearAll() {
            this.selectedCategories = [];
        },

        getSelectedCategoryObjects() {
            return this.selectedCategories.map(code =>
                this.categories.find(cat => cat.code === code)
            ).filter(cat => cat);
        },

        isMaxSelected() {
            return this.selectedCategories.length >= 5;
        },

        getRemainingSlots() {
            return Math.max(0, 5 - this.selectedCategories.length);
        },

        init() {
            // Initialize with existing categories if editing
            this.selectedCategories = [{!! (!empty($service->categories) ? str_replace(array(']', '['), '"', str_replace('][', '","', $service->categories)) : '') !!}];
        }
    }
}

function serviceLanguageSelector() {
    return {
        open: false,
        search: '',
        selectedLanguages: [], // Array of language codes

        languages: [
                @php
                    $languages = config('languages.locales');
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
            if (!this.canSelectMore() && !this.isSelected(language.code)) {
                return; // Cannot select more languages
            }

            const index = this.selectedLanguages.indexOf(language.code);
            if (index > -1) {
                // Remove language
                this.selectedLanguages.splice(index, 1);
            } else {
                // Add language (only if under limit)
                if (this.selectedLanguages.length < 10) {
                    this.selectedLanguages.push(language.code);
                }
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

        selectTop10() {
            // Select first 10 languages alphabetically
            const top10 = this.filteredLanguages.slice(0, 10);
            this.selectedLanguages = top10.map(lang => lang.code);
        },

        clearAll() {
            this.selectedLanguages = [];
        },

        getSelectedLanguageObjects() {
            return this.selectedLanguages.map(code =>
                this.languages.find(lang => lang.code === code)
            ).filter(lang => lang); // Filter out any undefined results
        },

        isMaxSelected() {
            return this.selectedLanguages.length >= 10;
        },

        canSelectMore() {
            return this.selectedLanguages.length < 10;
        },

        getRemainingSlots() {
            return Math.max(0, 10 - this.selectedLanguages.length);
        },

        // Initialize with existing service data
        init() {
            @php
            $selectedLanguages = '';
            if (!empty($service->languages)) {
                $languageIDs = explode('][', trim($service->languages, '[]'));
                if (!empty($languageIDs)) {
                    foreach ($languageIDs as $languageID) {
                        if (!empty($selectedLanguages)) {
                            $selectedLanguages .= ',';
                        }
                        $selectedLanguages .= "'" . $languageID . "'";
                    }
                }
            }
            @endphp
            this.selectedLanguages = [{!! (!empty($selectedLanguages) ? $selectedLanguages : '') !!}];
        }
    }
}
</script>
@endsection
