<?php

use Livewire\Component;

new class extends Component
{
    public function logout() {
        return redirect('logout');
    }
};
?>

<main class="me-3 flex justify-center items-center">
    <section class="bg-surface h-fit w-80 p-2 pb-3">
        <div class="flex items-center mb-8">
            <h1 class="text-text-primary text-2xl">Profile</h1>
            <div class="w-full text-end">
                <button wire:click='logout'
                    class="text-text-primary bg-red-600 p-1 hover:bg-red-700 active:bg-red-700 rounded-lg">Logout</button>
            </div>
        </div>

        <div class="flex flex-col gap-5 text-text-muted">
            <span><span class="text-text-primary">Name :</span> {{ auth()->guard()->user()->name }}</span>
            <span><span class="text-text-primary">Email :</span> {{ auth()->guard()->user()->email }}</span>
            <span><span class="text-text-primary">Role :</span> {{ auth()->guard()->user()->role->label }}</span>
            <span><span class="text-text-primary">Account Created At :</span> {{
                auth()->guard()->user()->created_at->format('j F Y') }}</span>
            <span><span class="text-text-primary">Word Tracked This Month :</span> {{
                auth()->guard()->user()->vocabulary()->whereMonth('created_at',
                now()->month)->whereYear('created_at', now()->year)->count() }}</span>
            <span><span class="text-text-primary">Word Tracked :</span> {{
                auth()->guard()->user()->vocabulary()->count() }}</span>
        </div>
    </section>
</main>