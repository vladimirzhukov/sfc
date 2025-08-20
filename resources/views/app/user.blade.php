@extends('layouts.app')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.snow.css" rel="stylesheet" />
@endsection

@section('content')
<div class="md:flex md:items-center md:justify-between md:space-x-5">
    <div class="flex items-start space-x-5">
        <div class="shrink-0">
            <div class="relative">
                <img src="{{ (!empty($user->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr($user->img, 0, 1) . '/' . substr($user->img, 0, 2) . '/' . substr($user->img, 0, 3) . '/' . $user->img : '/assets/images/no-user-image-icon.png') }}" alt="{{ (!empty($user->profile->first_name) ? $user->profile->first_name : '') }}{{ (!empty($user->profile->last_name) ? ' ' . $user->profile->last_name : '') }}" class="size-16 rounded-full dark:outline dark:-outline-offset-1 dark:outline-white/10" />
                <span aria-hidden="true" class="absolute inset-0 rounded-full shadow-inner"></span>
            </div>
        </div>
        <div class="">
            @php
            $contacts = '';
            if (!empty($user->profile->public_email)) {
                $contacts .= '<a href="mailto:' . $user->profile->public_email . '" class="text-sm font-medium text-gray-900 dark:text-white">' . $user->profile->public_email . '</a>';
            }
            if (!empty($user->profile->public_phone)) {
                if (!empty($contacts)) {
                    $contacts .= ', ';
                }
                $contacts .= '<a href="tel:' . $user->profile->public_phone . '" class="text-sm font-medium text-gray-900 dark:text-white">' . $user->profile->public_phone . '</a>';
            }
            @endphp
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ (!empty($user->profile->first_name) ? $user->profile->first_name : '') }}{{ (!empty($user->profile->last_name) ? ' ' . $user->profile->last_name : '') }}</h1>
            <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('Member since') }} <time datetime="{{ date('Y-m-d', strtotime($user->created_at)) }}">{{ date('Y-m-d', strtotime($user->created_at)) }}</time>{!! (!empty($user->city->name) ? ' <svg viewBox="0 0 28 28" fill="currentColor" data-slot="icon" aria-hidden="true" class="inline-block size-5 ms-1 text-gray-400 dark:text-gray-500"><path fill-rule="evenodd" d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z" clip-rule="evenodd"/></svg> ' . $user->city->name . (!empty($user->city->region->name) ? ' (' . (!empty($user->city->subregion->name) ? $user->city->subregion->name . ', ' : '') . $user->city->region->name . ')' : '') : '') !!}</p>
            @if (!empty($contacts))
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">{!! $contacts !!}</p>
            @endif
            @if (!empty($user->languages))
                @php
                $languages = $meta->languages;
                ksort($languages);
                @endphp
                <p class="mt-2 text-sm text-gray-500 dark:text-gray-400">
                    @foreach ($user->languages as $language)
                        @if (!empty($language->language_code) && !empty($languages[$language->language_code]['name']))
                            <span class="inline-flex items-center gap-x-1.5 rounded-full bg-indigo-100 ms-1 px-2 py-1 text-xs font-medium text-indigo-700">
                                <img class="size-4 rounded-full" src="/assets/flags/language/{{ $language->language_code }}.svg" alt="{{ $languages[$language->language_code]['name'] }}">
                                <span>{{ $languages[$language->language_code]['name'] }}</span>
                            </span>
                        @endif
                    @endforeach
                </p>
            @endif
        </div>
    </div>
    <div class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-y-0 sm:space-x-1 sm:space-x-reverse md:mt-0 md:flex-row md:space-x-1">
        @if (!empty($user->profile->fb))
            <a href="https://facebook.com/{{ $user->profile->fb }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->ig))
            <a href="https://instagram.com/{{ $user->profile->ig }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->yt))
            <a href="https://youtube.com/{{ $user->profile->yt }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->tk))
            <a href="https://tiktok.com/{{ $user->profile->tk }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 512 512">
                    <path fill-rule="nonzero" d="M382.31 103.3c-27.76-18.1-47.79-47.07-54.04-80.82-1.35-7.29-2.1-14.8-2.1-22.48h-88.6l-.15 355.09c-1.48 39.77-34.21 71.68-74.33 71.68-12.47 0-24.21-3.11-34.55-8.56-23.71-12.47-39.94-37.32-39.94-65.91 0-41.07 33.42-74.49 74.48-74.49 7.67 0 15.02 1.27 21.97 3.44V190.8c-7.2-.99-14.51-1.59-21.97-1.59C73.16 189.21 0 262.36 0 352.3c0 55.17 27.56 104 69.63 133.52 26.48 18.61 58.71 29.56 93.46 29.56 89.93 0 163.08-73.16 163.08-163.08V172.23c34.75 24.94 77.33 39.64 123.28 39.64v-88.61c-24.75 0-47.8-7.35-67.14-19.96z"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->wa))
            <a href="https://wa.me/{{ $user->profile->wa }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->fm))
            <a href="https://m.me/{{ $user->profile->fm }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 512 512">
                    <path d="M106.48 511.85c-2.07-.27-4.07-.86-5.93-1.72h-.01c-.34-.17-.69-.34-1.03-.52h-.01c-.25-.14-.51-.28-.76-.43h-.01c-.14-.08-.28-.17-.42-.26-.91-.56-1.77-1.19-2.58-1.89-.94-.8-1.8-1.69-2.58-2.66v-.01h-.01c-.77-.95-1.46-1.99-2.05-3.08v-.01h-.01c-.21-.39-.41-.79-.6-1.2v-.01c-.37-.8-.68-1.62-.94-2.48v-.01h-.01c-.06-.19-.11-.39-.17-.58v-.02c-.09-.34-.18-.69-.25-1.03v-.01c-.03-.13-.06-.27-.09-.41v-.02c-.07-.33-.12-.66-.17-1v-.03h-.01c-.03-.21-.05-.43-.08-.64v-.05c-.04-.3-.06-.6-.08-.91v-.12h-.01l-.03-.62-.05-1.61-.95-30.62-.41-13.33c-.13-5.64-2.69-10.89-6.85-14.6-.39-.35-.78-.7-1.17-1.06l-.08-.07v-.02h-.01c-.28-.25-.57-.51-.85-.77h-.01l-.08-.07v-.02h-.01l-.07-.06v-.02h-.03l-.92-.86-.09-.08v-.01l-.08-.07v-.01h-.02c-.97-.91-1.94-1.83-2.91-2.75v-.01l-.08-.07v-.01h-.01l-.08-.08v-.01h-.01l-.07-.07v-.01h-.02l-.07-.07v-.02h-.02l-.07-.06v-.03h-.02l-.06-.05v-.03h-.03a239.65 239.65 0 01-6.16-6.19h-.01l-.08-.09c-.49-.51-.98-1.02-1.46-1.54v-.01h-.01l-.08-.08-.08-.09h-.01l-.94-1v-.03h-.03l-.06-.07v-.02h-.02l-.06-.07v-.02h-.01l-.08-.07v-.01c-.32-.34-.63-.68-.95-1.02v-.01l-.08-.09c-.55-.6-1.09-1.2-1.64-1.8-.2-.23-.4-.45-.6-.67v-.02h-.02l-.06-.08v-.01h-.01l-.08-.08v-.01l-.51-.57v-.03h-.03l-.06-.07v-.01h-.01l-.59-.68v-.01h-.01c-.2-.23-.4-.45-.6-.68v-.01l-1.11-1.29h-.01c-.14-.17-.28-.34-.42-.5v-.02h-.01l-.51-.59v-.01h-.01c-.14-.16-.28-.33-.42-.5v-.01h-.01l-.08-.09-.34-.41V407h-.02l-.07-.08v-.01c-.11-.13-.23-.27-.34-.41v-.02h-.01l-.42-.5v-.01h-.01c-.63-.77-1.26-1.54-1.88-2.31v-.01h-.01l-.34-.42v-.01h-.01c-.11-.14-.22-.28-.33-.41v-.02h-.02l-.07-.09-.25-.32v-.02h-.02l-.33-.42v-.01h-.01l-.33-.43h-.01c-.31-.4-.63-.8-.94-1.21-.29-.37-.57-.74-.86-1.12l-.26-.33v-.01l-.25-.33v-.02h-.01l-.25-.32v-.02h-.02l-.24-.32v-.02h-.02l-.24-.32v-.03h-.02l-.06-.08h-.01l-.17-.23v-.03h-.02l-.23-.32v-.02h-.02c-.66-.89-1.32-1.78-1.96-2.67l-.43-.59v-.01h-.01c-.14-.2-.28-.39-.42-.59v-.02h-.01c-.09-.11-.17-.22-.25-.34l-.17-.24v-.02h-.02l-.41-.59v-.01h-.01c-.2-.28-.4-.56-.59-.85v-.01h-.01c-.14-.2-.29-.4-.42-.6h-.01c-.31-.46-.63-.92-.94-1.38l-.17-.25v-.01h-.01l-.17-.24v-.01h-.01l-.16-.24v-.02h-.01l-.16-.23v-.03h-.02c-.86-1.28-1.72-2.57-2.56-3.86v-.01l-.6-.93V383h-.01l-.16-.24v-.01h-.01l-.17-.26c-.08-.14-.17-.27-.25-.4v-.03H38l-.16-.24v-.02h-.01l-.16-.26c-.08-.14-.17-.27-.26-.41v-.02h-.01l-.16-.25v-.01l-.43-.68v-.01c-.46-.74-.92-1.48-1.37-2.23l-.26-.42v-.01h-.01c-.08-.14-.17-.28-.25-.42v-.01h-.01c-.08-.14-.17-.28-.25-.41v-.02h-.01c-.08-.14-.16-.28-.25-.42v-.01l-.25-.43h-.01c-.49-.83-.97-1.66-1.46-2.5-.11-.2-.23-.4-.34-.6l-.35-.6-.08-.15v-.02h-.01c-.08-.14-.17-.29-.25-.43l-.09-.15v-.02h-.01l-.33-.6v-.01l-.09-.14v-.03h-.01l-.33-.59v-.01c-.15-.26-.29-.51-.43-.77v-.01c-.35-.62-.69-1.25-1.03-1.88v-.01l-.09-.15v-.02h-.01c-.16-.31-.34-.63-.5-.94l-.09-.16v-.02h-.01l-.07-.14v-.03h-.02l-.07-.13v-.04h-.02c-.2-.37-.39-.75-.58-1.12l-.09-.16v-.01l-.08-.16v-.01h-.01c-.58-1.12-1.15-2.23-1.72-3.36l-.08-.17-.09-.17-.08-.17h-.01l-.08-.17v-.01l-.09-.16v-.01l-.08-.17c-.67-1.36-1.33-2.73-1.98-4.11v-.02h-.01l-.08-.16v-.01c-.14-.3-.29-.6-.43-.9v-.05h-.02l-.06-.13v-.04h-.02l-.07-.15v-.02h-.01l-.07-.17c-.12-.25-.23-.5-.35-.76v-.02h-.01l-.07-.17c-.15-.31-.29-.62-.43-.94h-.01c-.23-.52-.46-1.03-.68-1.54v-.01h-.01c-.11-.26-.22-.52-.34-.77v-.01c-.08-.19-.17-.39-.25-.58v-.02h-.01c-.08-.19-.17-.38-.25-.57v-.03h-.02l-.07-.17c-.06-.14-.11-.27-.17-.4V348h-.01c-.09-.2-.17-.39-.25-.58v-.03h-.01l-.25-.58v-.02c-.09-.2-.17-.39-.25-.59v-.01h-.01c-.08-.2-.17-.4-.25-.6-.32-.77-.64-1.55-.95-2.32l-.17-.42v-.01h-.01l-.16-.42v-.01h-.01c-.05-.14-.11-.29-.16-.43h-.01l-1.2-3.09v-.01c-.09-.23-.17-.45-.26-.68v-.01l-.26-.67v-.02l-.08-.21v-.04h-.02l-.15-.41v-.02h-.01l-.08-.21v-.05h-.02c-.05-.14-.1-.29-.15-.43l-.09-.23v-.03h-.01l-.24-.69-.09-.23v-.03h-.01c-.26-.71-.51-1.43-.76-2.14v-.01h-.01l-.08-.24v-.02l-.09-.23v-.02l-.08-.23V332h-.01c-.17-.49-.34-.97-.51-1.45v-.01l-.08-.25v-.01h-.01l-.08-.25v-.01l-.09-.25v-.01l-.08-.25v-.01l-.09-.25-.08-.26h-.01l-.08-.26-.09-.25v-.01l-.08-.25-.09-.26-.08-.26h-.01c-.17-.54-.34-1.08-.51-1.61v-.03h-.01l-.08-.24v-.01c-.09-.27-.17-.54-.25-.81v-.05h-.02l-.07-.22v-.04h-.02l-.07-.23v-.03h-.01l-.07-.25v-.01h-.01c-.05-.18-.11-.37-.17-.55v-.05h-.01l-.07-.24v-.02H11c-.11-.37-.22-.74-.34-1.11v-.01c-.26-.87-.52-1.75-.77-2.63v-.03h-.01l-.16-.56v-.04h-.01l-.08-.26-.08-.3v-.05h-.02l-.07-.25c-.03-.11-.06-.21-.09-.31v-.04h-.01c-.05-.19-.1-.39-.16-.59v-.01l-.08-.3v-.05H9.1l-.16-.58v-.02c-.2-.74-.4-1.48-.6-2.23l-.08-.32v-.03h-.01l-.08-.31v-.03h-.01l-.08-.3v-.04h-.01l-.07-.29v-.06h-.02l-.07-.27v-.07h-.02l-.06-.26-.09-.34v-.01l-.09-.34c-.26-1.05-.52-2.11-.77-3.17v-.01c-.09-.37-.17-.74-.26-1.1v-.02c-.06-.24-.11-.48-.17-.72v-.05h-.01l-.08-.32v-.03a4.18 4.18 0 01-.08-.34v-.09h-.02l-.07-.3v-.04h-.01c-.02-.12-.05-.24-.07-.36v-.07h-.02l-.07-.32v-.03h-.01l-.16-.76v-.01c-.24-1.08-.47-2.17-.69-3.26v-.01l-.09-.41v-.02l-.08-.4v-.03h-.01c-.02-.13-.05-.26-.08-.39v-.04h-.01c-.02-.14-.05-.27-.07-.41v-.02h-.01c-.05-.29-.11-.59-.17-.88v-.06h-.01l-.07-.39v-.04h-.01l-.08-.41v-.02l-.08-.43v-.01c-.12-.62-.23-1.25-.35-1.89l-.08-.48v-.03h-.01l-.08-.46v-.06h-.01l-.08-.42v-.1h-.01c-.02-.13-.05-.26-.07-.39v-.12h-.02c-.03-.13-.05-.27-.07-.4v-.03l-.08-.49v-.03h-.01l-.08-.5v-.01l-.09-.51v-.01c-.14-.91-.29-1.83-.43-2.74v-.01l-.08-.57v-.03h-.01l-.08-.54v-.07h-.01c-.02-.16-.05-.33-.07-.5v-.1h-.02c-.02-.17-.05-.35-.07-.52v-.08h-.01l-.08-.55v-.05l-.08-.57V284H2.4l-.08-.59v-.01c-.06-.43-.11-.85-.17-1.29-.06-.46-.11-.92-.17-1.39v-.07h-.01l-.08-.62v-.07h-.01c-.02-.21-.05-.42-.07-.63v-.14h-.02c-.03-.2-.05-.41-.07-.61v-.08h-.01c-.03-.23-.05-.47-.08-.7v-.07l-.08-.71v-.07h-.01c-.06-.51-.11-1.02-.16-1.53v-.02h-.01c-.02-.29-.05-.58-.08-.87v-.07h-.01l-.08-.81v-.14h-.01c-.02-.25-.05-.5-.07-.75v-.19H1.1c-.03-.26-.05-.52-.07-.77v-.18h-.01c-.03-.28-.05-.56-.07-.84v-.11H.94c-.03-.3-.06-.61-.08-.92v-.02c-.06-.75-.12-1.51-.17-2.26v-.15H.68c-.03-.35-.05-.71-.08-1.06v-.23H.59c-.03-.37-.05-.73-.07-1.1v-.28H.5c-.03-.4-.05-.8-.07-1.21v-.08l-.09-1.46c-.03-.63-.05-1.27-.08-1.91v-.33H.24c-.02-.6-.05-1.21-.07-1.82v-.41H.16c-.03-.78-.05-1.56-.07-2.34v-.07H.08a269.305 269.305 0 01.61-25.89v-.01c.47-6.62 1.19-13.16 2.15-19.6v-.01c.26-1.79.56-3.56.86-5.32v-.01c.27-1.58.56-3.15.86-4.72.09-.46.17-.92.26-1.38.45-2.33.94-4.66 1.46-6.97v-.01c.43-1.93.89-3.84 1.37-5.75v-.01c.42-1.64.85-3.27 1.29-4.89v-.01c.12-.42.23-.85.35-1.28v-.01c.52-1.87 1.07-3.73 1.63-5.58v-.01a255.185 255.185 0 013.61-10.92h.01c.72-2.02 1.46-4.02 2.23-6.02.86-2.22 1.74-4.43 2.66-6.62h.01v-.01c1.47-3.48 3.02-6.92 4.64-10.31 1.88-3.93 3.86-7.81 5.94-11.61.87-1.59 1.76-3.17 2.66-4.73v-.01c1.07-1.85 2.16-3.68 3.27-5.5.82-1.33 1.66-2.64 2.5-3.95 2.39-3.74 4.88-7.42 7.48-11.01 2.3-3.19 4.68-6.31 7.14-9.38 2.36-2.95 4.8-5.85 7.31-8.68v-.01C106.39 32.65 175.06.67 253.51 0h4.98c73.7.62 138.78 28.91 184.55 75.6 4.33 4.43 8.49 9.02 12.47 13.76 1.19 1.42 2.37 2.86 3.53 4.3a239.77 239.77 0 0114.1 19.61v.01c2.27 3.51 4.45 7.1 6.54 10.74v.01c.78 1.36 1.56 2.73 2.32 4.12v.01c3.06 5.59 5.9 11.33 8.52 17.19v.01c.76 1.71 1.51 3.42 2.23 5.15v.01c.71 1.68 1.4 3.36 2.07 5.07.77 1.96 1.51 3.94 2.23 5.93v.01c.69 1.87 1.34 3.76 1.98 5.66v.01c.03.09.06.17.09.26.65 1.96 1.28 3.94 1.89 5.93v.01c.66 2.16 1.29 4.34 1.89 6.53.99 3.6 1.92 7.24 2.75 10.92v.01h.01c.09.39.16.79.25 1.19v.01c.9 4.05 1.7 8.15 2.41 12.29v.01c.66 3.86 1.24 7.76 1.72 11.69v.01l.09.77c.03.26.05.51.08.77v.01l.09.76v.01c.91 7.99 1.46 16.13 1.63 24.4v.03c.04 1.84.07 3.69.07 5.55 0 1.85-.03 3.7-.07 5.54-.42 20.66-3.2 40.51-8.08 59.35-2.6 10.02-5.79 19.75-9.55 29.16-3.39 8.5-7.25 16.73-11.53 24.68-.76 1.42-1.53 2.82-2.32 4.22a238.214 238.214 0 01-21.5 31.82c-11.36 14.19-24.31 27.04-38.62 38.36-2.34 1.85-4.72 3.65-7.14 5.42-4.2 3.08-8.49 6.04-12.9 8.86-3.16 2.02-6.37 3.96-9.63 5.85-17.66 10.2-36.8 18.37-57.11 24.25-2.17.63-4.35 1.23-6.54 1.81-.23.06-.46.11-.69.17-11.91 3.09-24.2 5.4-36.81 6.88-2.48.29-4.98.55-7.48.77-4.94.45-9.93.76-14.97.95l-2.49.09c-2.84.09-5.7.14-8.57.14-1.1 0-2.2-.01-3.3-.02v-.04h-2.27c-.97-.02-1.93-.04-2.89-.07v-.01H247c-.68-.02-1.36-.05-2.04-.07v-.02h-.4l-1.32-.06v-.03h-.68l-1.04-.05v-.03h-.69l-.95-.05v-.04h-.61l-1.11-.06v-.02h-.31c-.79-.05-1.57-.11-2.35-.16v-.02h-.19l-.85-.06v-.02h-.31l-.72-.06v-.03h-.39l-.64-.05v-.03h-.41l-.62-.06v-.03h-.38l-.66-.06v-.03h-.3l-.73-.06v-.02h-.2l-.74-.07v-.02h-.16l-.88-.08-.77-.08v-.01h-.06l-.63-.07v-.02h-.19l-.58-.06v-.02h-.22l-.47-.05v-.04h-.3l-.47-.05v-.03h-.29l-.49-.06v-.03h-.25l-.44-.05v-.04h-.28l-.49-.05v-.03h-.22l-.47-.06v-.03h-.22l-.55-.07v-.01h-.13l-.56-.08v-.01h-.11c-.62-.08-1.25-.16-1.87-.25v-.01h-.06l-.54-.07v-.01h-.08l-.44-.07v-.02h-.17l-.43-.06v-.03h-.17l-.43-.06v-.02h-.16l-.36-.05v-.04h-.22l-.38-.05v-.03h-.2l-.31-.05v-.04h-.26l-.35-.05v-.04h-.21l-.39-.06v-.02h-.16l-.36-.06v-.03h-.18l-.42-.06v-.02h-.12l-.39-.07v-.02h-.14l-.47-.08v-.01h-.06l-2-.33v-.01h-.04l-.39-.07v-.02h-.1l-.42-.07v-.01h-.07l-.36-.06v-.03h-.13l-.3-.05v-.03h-.18l-.33-.06v-.03h-.14l-.29-.05v-.04h-.18l-.34-.06v-.02h-.13l-.3-.06v-.03h-.16l-.27-.05v-.03h-.19l-.32-.07v-.02h-.13l-.3-.06v-.03h-.15l-.28-.05v-.03h-.17l-.35-.07v-.02h-.09l-.34-.07v-.01h-.1l-.42-.09h-.01l-.42-.08v-.01h-.01l-.42-.08h-.01l-.42-.09-.77-.16v-.01h-.07l-.36-.08v-.01h-.05l-.38-.08h-.03l-.31-.07v-.02h-.1l-.33-.07v-.01h-.07l-.28-.06v-.03h-.12l-.31-.07v-.02h-.1l-.24-.05v-.03h-.15l-.28-.06v-.03h-.11l-.24-.05v-.03h-.15l-.28-.07V490h-.11l-.23-.05v-.04h-.16l-.27-.06v-.02h-.11l-.24-.06v-.03h-.14l-.29-.06v-.02h-.08l-.26-.06v-.03h-.12l-.31-.07v-.02h-.06l-.28-.06v-.02h-.09l-.34-.08v-.01h-.03c-.48-.11-.96-.23-1.44-.34h-.01l-.33-.08v-.01h-.02l-.32-.08h-.04l-.31-.08v-.01h-.04l-.3-.07v-.02h-.05l-.3-.07v-.01h-.05l-.29-.07v-.02h-.06l-.28-.07v-.01h-.06l-.29-.08v-.01h-.06l-.2-.05v-.04h-.14l-.2-.05v-.03h-.14l-.2-.06v-.03h-.14l-.21-.05v-.03h-.12l-.22-.06v-.03h-.11l-.24-.06v-.03h-.1l-.24-.06v-.02h-.09l-.25-.07v-.02h-.08l-.27-.07v-.01h-.05l-.29-.08v-.01h-.04l-.22-.06v-.03h-.1l-.24-.06v-.02h-.08l-.27-.07v-.02h-.06l-.28-.08h-.04l-.31-.09-.62-.17c-4.55-1.21-9.41-.89-13.7 1.02l-16.98 7.49-33.83 14.91c-.25.11-.5.22-.75.32-.23.09-.46.17-.68.25h-.01v.01l-.24.08h-.02v.01c-.07.02-.15.05-.23.08h-.03c-.08.03-.16.06-.24.08h-.01v.01c-.65.2-1.31.37-1.96.51h-.02c-.14.03-.28.06-.42.08h-.01v.01c-.35.06-.7.12-1.05.17h-.07c-1.74.23-3.47.22-5.16 0z"/><path fill="#fff" fill-rule="nonzero" d="M102.27 320.93l75.2-119.29c11.97-19.01 37.57-23.68 55.55-10.24l59.84 44.86c5.51 4.1 13.06 4.1 18.5-.06l80.77-61.32c10.75-8.19 24.83 4.74 17.66 16.2l-75.26 119.23c-11.97 19.01-37.57 23.68-55.55 10.24l-59.84-44.87c-5.51-4.09-13.06-4.09-18.5.07l-80.77 61.31c-10.75 8.19-24.83-4.67-17.6-16.13z"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->tg))
            <a href="https://t.me/{{ $user->profile->tg }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23.91 3.79L20.3 20.84c-.25 1.21-.98 1.5-2 .94l-5.5-4.07-2.66 2.57c-.3.3-.55.56-1.1.56-.72 0-.6-.27-.84-.95L6.3 13.7l-5.45-1.7c-1.18-.35-1.19-1.16.26-1.75l21.26-8.2c.97-.43 1.9.24 1.53 1.73z"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->ln))
            <a href="https://linkedin.com/in/{{ $user->profile->ln }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd"/>
                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->th))
            <a href="https://threads.com/{{ $user->profile->th }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M6.321 6.016c-.27-.18-1.166-.802-1.166-.802.756-1.081 1.753-1.502 3.132-1.502.975 0 1.803.327 2.394.948s.928 1.509 1.005 2.644q.492.207.905.484c1.109.745 1.719 1.86 1.719 3.137 0 2.716-2.226 5.075-6.256 5.075C4.594 16 1 13.987 1 7.994 1 2.034 4.482 0 8.044 0 9.69 0 13.55.243 15 5.036l-1.36.353C12.516 1.974 10.163 1.43 8.006 1.43c-3.565 0-5.582 2.171-5.582 6.79 0 4.143 2.254 6.343 5.63 6.343 2.777 0 4.847-1.443 4.847-3.556 0-1.438-1.208-2.127-1.27-2.127-.236 1.234-.868 3.31-3.644 3.31-1.618 0-3.013-1.118-3.013-2.582 0-2.09 1.984-2.847 3.55-2.847.586 0 1.294.04 1.663.114 0-.637-.54-1.728-1.9-1.728-1.25 0-1.566.405-1.967.868ZM8.716 8.19c-2.04 0-2.304.87-2.304 1.416 0 .878 1.043 1.168 1.6 1.168 1.02 0 2.067-.282 2.232-2.423a6.2 6.2 0 0 0-1.528-.161"/>
                </svg>
            </a>
        @endif
        @if (!empty($user->profile->tw))
            <a href="https://x.com/{{ $user->profile->tw }}" target="_blank" class="inline-flex items-center justify-center rounded-md bg-white px-1 py-1 text-sm font-semibold text-gray-900 shadow-xs inset-ring inset-ring-gray-300 hover:bg-gray-50 dark:bg-white/10 dark:text-white dark:shadow-none dark:inset-ring-white/5 dark:hover:bg-white/20">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 5.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.343 8.343 0 0 1-2.605.981A4.13 4.13 0 0 0 15.85 4a4.068 4.068 0 0 0-4.1 4.038c0 .31.035.618.105.919A11.705 11.705 0 0 1 3.4 4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 6.1 13.635a4.192 4.192 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 2 18.184 11.732 11.732 0 0 0 8.291 20 11.502 11.502 0 0 0 19.964 8.5c0-.177 0-.349-.012-.523A8.143 8.143 0 0 0 22 5.892Z" clip-rule="evenodd"/>
                </svg>
            </a>
        @endif
    </div>
</div>
@if (!empty($user->about_html))
    <div class="space-y-12">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <hr class="border-gray-200 dark:border-gray-700 mb-4 mt-8">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4">{{ __('Intro') }}</h1>
                <div id="editor">
                    {!! $user->about_html !!}
                </div>
            </div>
        </div>
    </div>
@endif
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script>
<script>
const quill = new Quill('#editor', {
    modules: {
        toolbar: false
    },
    theme: 'snow',
    readOnly: true
});
</script>
@endsection
