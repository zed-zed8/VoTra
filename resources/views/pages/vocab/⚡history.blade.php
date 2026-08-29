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

<main>
    <section>
        <h1>{{ auth()->guard()->user()->name }}'s Vocabulary Track History</h1>

        <div class="grid grid-cols-[1fr_20em_1fr_1fr] grid-rows-1 gaps-1">
            <span class="">Word</span>
            <span class="">Description</span>
            <span class="">Source</span>
            <span class="">Learned At</span>
            @foreach ($vocabs as $vocab)
            <span class="">{{ $vocab->word }}</span>
            <span class="">{{ $vocab->description }}</span>
            <span class="">{{ $vocab->source }}</span>
            <span class="">{{ $vocab->created_at->format('j F Y') }}</span>
            @endforeach
        </div>

    </section>
</main>