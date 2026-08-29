<?php

use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component
{
    #[Validate(['required', 'string', 'max:255'], message: [
        'required' => 'word cannot be empty', 
        'max' => 'word cannot be more than 255'
    ])]
    public string $word = '';
    
    #[Validate(['required', 'string'], message: [
        'required' => 'description cannot be empty'
    ])]
    public string $description = '';
    
    #[Validate(['required', 'max:255'], message: [
        'required' => 'source cannot be empty',
        'max' => 'source cannot be more than 255'
    ])]
    public string $source = '';

    public function create() {
        $validated = $this->validate();

        auth()->guard()->user()->vocabulary()->create($validated);

        return redirect('/');
    }
};
?>

<main>
    <section>
        <h1>Track a new word</h1>
        <form wire:submit.prevent='create'>
            <input type="text" wire:model.live.blur='word' placeholder="authorized...">
            @error('word') <span class="error">{{ $message }}</span> @enderror

            <textarea wire:model.live.blur='description'
                placeholder="having official permission to do something or for something to happen..."></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror

            <input type="text" wire:model.live.blur='source' placeholder="Cambridge Dictionary...">
            @error('source') <span class="error">{{ $message }}</span> @enderror

            <button type="submit">Track</button>
        </form>
    </section>
</main>