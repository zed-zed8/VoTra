<?php

use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

new class extends Component
{
    public Collection $vocabs;
    
    public function mount() {
        $this->vocabs = auth()->guard()->user()->vocabulary()->latest()->get();
    }
};
?>

<main class="me-3 flex justify-center items-center">
    <section class="bg-surface h-full md:h-fit w-80 md:w-200 lg:240 p-2 pb-3">
        <h1 class="text-center text-text-primary mb-8 text-2xl">{{ auth()->guard()->user()->name }}'s Vocabulary Track
            History</h1>

        @if ($vocabs->isEmpty())
        <div class="text-text-muted text-2xl text-center">No Track Found</div>
        <div class="text-text-primary w-full text-center">
            <a href="new" wire:navigate class="">
                <button
                    class="text-center bg-primary-500 hover:bg-primary-600 active:bg-primary-600 rounded-xl p-2 w-40 cursor-pointer">
                    Track Now →
                </button>
            </a>
        </div>
        @else
        <div class="overflow-auto">
            <div class="pb-2 w-200 grid grid-cols-[auto_20em_auto_auto] *:p-2 *:border-2 *:border-primary-900">
                <span class="text-text-primary">Word</span>
                <span class="text-text-primary">Description</span>
                <span class="text-text-primary">Source</span>
                <span class="text-text-primary">Tracked At</span>
                @foreach ($vocabs as $vocab)
                <span class="text-text-muted">{{ $vocab->word }}</span>
                <span class="text-text-muted">{{ $vocab->description }}</span>
                <span class="text-text-muted">{{ $vocab->source }}</span>
                <span class="text-text-muted">{{ $vocab->created_at->format('j F Y') }}</span>
                @endforeach
            </div>
        </div>
        @endif
    </section>
</main>