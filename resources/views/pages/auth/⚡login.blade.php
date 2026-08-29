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

<main>
    <section>
        <h1>Login</h1>

        <form wire:submit.prevent='login'>
            <input type="text" wire:model="name" placeholder="Input name">
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <input type="password" wire:model="password" placeholder="Input password">
            @error('password') <span class="error">{{ $message }}</span> @enderror

            <button type="submit" class="cursor-pointer">Login</button>
        </form>

        <a href="register">Register</a>
    </section>
</main>