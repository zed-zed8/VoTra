<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="overflow-x-hidden overflow-y-auto bg-background">
    <header class="w-screen h-[3em] bg-primary-600">
        <nav class="text-blue-300 flex p-2 items-center me-3">
            <div class="flex-1">
                <a href="/" wire:navigate class="text-purple-400 text-2xl">
                    <span class="text-primary-400">V</span>o<span class="text-teal-400">T</span>ra
                </a>
            </div>

            <ul class="flex gap-1 justify-center underline **:hover:text-blue-400 **:hover:decoration-blue-400">
                <li><a href="/" wire:navigate>Home</a></li>
                <li><a href="new" wire:navigate>New</a></li>
                <li><a href="history" wire:navigate>History</a></li>
            </ul>

            <div class="flex-1 text-end">
                @if (auth()->check())
                <a href="/profile" wire:navigate>Profile</a>
                @else
                <a href="login" wire:navigate>Login</a>
                @endif
            </div>
        </nav>
    </header>

    {{ $slot }}

    <footer class="w-screen h-[2em] bg-primary-600 text-center text-text-primary me-3">
        &copy; VoTra {{ now()->format("Y") }}
    </footer>

    @livewireScripts
</body>

</html>