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

        return redirect('new');
    }
};
?>

<main class="me-3 flex justify-center items-center">
    <section class="bg-surface h-fit w-80 p-2 pb-3">
        <h1 class="text-center text-text-primary mb-8 text-2xl">Track a new word</h1>

        <form wire:submit.prevent='create' class="flex flex-col text-text-primary gap-5">
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2">
                    <label for="word" class="shrink-0">Word :</label>
                    <input type="text" wire:model.live.blur='word' id="word" placeholder="authorized..."
                        class="form-input flex-1">
                </div>
                @error('word') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="description">Description :</label>
                <textarea wire:model.live.blur='description' id="description"
                    placeholder="having official permission to do something or for something to happen..."
                    class="resize-none block w-full form-input h-24"></textarea>
                @error('description') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2">
                    <label for="source" class="shrink-0">Source :</label>
                    <input type="text" wire:model.live.blur='source' id="source" placeholder="Cambridge Dictionary..."
                        class="form-input flex-1">
                </div>
                @error('source') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <button type="submit"
                class="cursor-pointer bg-primary-800 p-1 rounded-lg hover:bg-primary-700 active:bg-primary-700">Track</button>
        </form>
    </section>
</main>