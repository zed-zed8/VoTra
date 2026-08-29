<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>
    <header>
        <nav class="text-blue-400 underline">
            <a href="/" wire:navigate>Brand</a>

            <ul>
                <li><a href="/" wire:navigate>Home</a></li>
                <li><a href="/vocab-new" wire:navigate>Vocab-New</a></li>
                <li><a href="/vocab-history" wire:navigate>Vocab-History</a></li>
            </ul>

            @if (auth()->check())
            <a href="/profile" wire:navigate>Profile</a>
            @else
            <a href="login" wire:navigate>Login</a>
            @endif
        </nav>
    </header>

    {{ $slot }}

    @livewireScripts
</body>

</html>