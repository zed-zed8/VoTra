<?php

use Livewire\Component;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;

new class extends Component
{
    public string $name = '';
    public string $password = '';
    public bool $remember = false;

    protected array $rules = [
        'name' => ['required', 'string', 'max:255'],
        'password' => ['required', 'string', 'min:8', 'max:255'],
    ];

    public function login() {
        $validated = $this->validate();

        if (!Auth::attempt(['name' => $validated['name'], 'password' => $validated['password']], $this->remember)) {
            throw ValidationException::withMessages([
                'name' => 'These credentials do not match our records.',
            ]);
        }
        
        session()->regenerate();

        return redirect("/");
    }
};
?>

<main class="me-3 flex justify-center items-center">
    <section class="bg-surface h-fit w-80 md:w-md p-2">
        <h1 class="text-center text-text-primary mb-10">Login</h1>

        <form wire:submit.prevent='login' class="flex flex-col text-text-primary gap-5">
            <div class="flex flex-col gap-1">
                <label for="name">Name :</label>
                <input type="text" wire:model="name" id="name" placeholder="Input name" class="form-input">
                @error('name') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="password">Password :</label>
                <input type="password" wire:model="password" id="password" placeholder="Input password"
                    class="form-input">
                @error('password') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <button type="submit"
                class="col-span-2 cursor-pointer bg-primary-800 p-1 rounded-lg hover:bg-primary-700 active:bg-primary-700">Login</button>
        </form>

        <div class="text-text-muted text-end">
            No account? <a href="register" class="link">Register Now</a>
        </div>
    </section>
</main>