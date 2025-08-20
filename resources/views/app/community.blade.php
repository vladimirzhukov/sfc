@extends('layouts.app')

@section('content')
@if ($members->isNotEmpty())
    <div class="space-y-12 mb-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-2xl font-bold text-gray-900 dark:text-white">{{ __('Community Members') }}</h1>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ __('app.community_members') }}</p>
            </div>
        </div>
    </div>
    <ul role="list" class="divide-y divide-gray-100 dark:divide-white/5 mb-8">
        @foreach ($members as $member)
            <li class="relative flex justify-between gap-x-6 px-4 py-5 hover:bg-gray-50 sm:px-6 lg:px-8 dark:hover:bg-white/2.5">
                <div class="flex min-w-0 gap-x-4">
                    <img src="{{ (!empty($member->user->img) ? 'https://fvn.ams3.cdn.digitaloceanspaces.com/sfccy/avatars/' . substr($member->user->img, 0, 1) . '/' . substr($member->user->img, 0, 2) . '/' . substr($member->user->img, 0, 3) . '/' . $member->user->img : '/assets/images/no-user-image-icon.png') }}" alt="{{ (!empty($member->first_name) ? $member->first_name : '') }}{{ (!empty($member->last_name) ? ' ' . $member->last_name : '') }}" class="size-12 flex-none rounded-full bg-gray-50 dark:bg-gray-800 dark:outline dark:-outline-offset-1 dark:outline-white/10" />
                    <div class="min-w-0 flex-auto">
                        <p class="text-sm/6 font-semibold text-gray-900 dark:text-white"><a href="{{ route('app::user', ['nickname' => $member->user->name]) }}"><span class="absolute inset-x-0 -top-px bottom-0"></span>{{ (!empty($member->first_name) ? $member->first_name : '') }}{{ (!empty($member->last_name) ? ' ' . $member->last_name : '') }}</a></p>
                        <p class="mt-1 flex text-xs/5 text-gray-500 dark:text-gray-400">{!! (!empty($member->public_email) ? '<a href="mailto:' . $member->public_email . '" class="relative truncate hover:underline">' . $member->public_email . '</a>' : '') !!}</p>
                    </div>
                </div>
                <div class="flex shrink-0 items-center gap-x-4">
                    <div class="hidden sm:flex sm:flex-col sm:items-end">
                        <p class="text-sm/6 text-gray-900 dark:text-white">{{ (!empty($member->user->city->name) ? $member->user->city->name . (!empty($member->user->city->region->name) ? ' (' . $member->user->city->region->name . ')' : '') : '') }}</p>
                        @if ($member->user->isOnline())
                            <div class="mt-1 flex items-center gap-x-1.5">
                                <div class="flex-none rounded-full bg-emerald-500/20 p-1 dark:bg-emerald-500/30">
                                    <div class="size-1.5 rounded-full bg-emerald-500"></div>
                                </div>
                                <p class="text-xs/5 text-gray-500 dark:text-gray-400">{{ __('Online') }}</p>
                            </div>
                        @else
                            <p class="mt-1 text-xs/5 text-gray-500 dark:text-gray-400">{{ __('Last seen') }} <time datetime="{{ date('Y-m-d H:i:s', strtotime($member->user->last_seen)) }}">{{ $member->user->getLastSeenFormatted() }}</time></p>
                        @endif
                    </div>
                    <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true" class="size-5 flex-none text-gray-400 dark:text-gray-500">
                        <path d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
                    </svg>
                </div>
            </li>
        @endforeach
    </ul>
    {{ $members->links() }}
@endif
@endsection
