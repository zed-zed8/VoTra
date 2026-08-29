<?php

use Livewire\Component;

new class extends Component
{
    public function logout() {
        return redirect('logout');
    }
};
?>

<main>
    <section>
        <div class="">
            <h1>Profile</h1>
            <button wire:click='logout'>Logout</button>
        </div>

        <div class="">
            <span>Name : {{ auth()->guard()->user()->name }}</span>
            <span>Email : {{ auth()->guard()->user()->email }}</span>
            <span>Role : {{ auth()->guard()->user()->role->label }}</span>
            <span>Account Created At : {{ auth()->guard()->user()->created_at->format('j F Y') }}</span>
            <span>Word Tracked This Month : {{ auth()->guard()->user()->vocabulary()->whereMonth('created_at',
                now()->month)->whereYear('created_at', now()->year)->count() }}</span>
            <span>Word Tracked : {{ auth()->guard()->user()->vocabulary()->count() }}</span>
        </div>
    </section>
</main>