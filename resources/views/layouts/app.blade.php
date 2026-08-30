<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="overflow-x-hidden overflow-y-auto bg-background min-h-screen grid grid-rows-[3em_1fr_2em]">
    <header class="w-screen bg-primary-600">
        <nav class="flex p-2 items-center me-3">
            <div class="flex-1">
                <a href="/" wire:navigate class="text-purple-400 text-2xl">
                    <span class="text-primary-200">V</span>o<span class="text-teal-200">T</span>ra
                </a>
            </div>

            <ul class="flex gap-3 justify-center **:text-blue-200 **:hover:text-blue-300 **:active:text-blue-300">
                <li><a href="/" wire:navigate @class(['underline decoration-3 decoration-blue-400'=>
                        request()->is('/')])>Home</a></li>
                <li><a href="new" wire:navigate @class(['underline decoration-3 decoration-blue-400'=>
                        request()->is('new')])>New</a></li>
                <li><a href="history" wire:navigate @class(['underline decoration-3 decoration-blue-400'=>
                        request()->is('history')])>History</a></li>
            </ul>

            <div
                class="flex-1 text-end text-primary-100 *:hover:text-blue-300 *:hover:decoration-blue-300 underline *:active:text-blue-300 *:active:devoration-blue-300">
                @if (auth()->check())
                <a href="/profile" wire:navigate>Profile</a>
                @else
                <a href="login" wire:navigate>Login</a>
                @endif
            </div>
        </nav>
    </header>

    {{ $slot }}

    <footer class="w-screen bg-primary-600 text-center text-text-primary me-3">
        &copy; VoTra {{ now()->format("Y") }}
    </footer>

    @livewireScripts
</body>

</html>