<?php

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

new class extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirmation = '';

    protected array $rules = [
        'name' => ['required', 'string', 'max:255', 'unique:users,name'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'max:255', 'confirmed'],
    ];

    public function register() {
        $validated = $this->validate();
        $validated['password'] = Hash::make($validated['password']);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        auth()->guard()->login($user);
        return redirect("/");
    }
};
?>

<main>
    <section>
        <h1>Register</h1>

        <form wire:submit='register'>
            <input type="text" wire:model="name" placeholder="Input name">
            @error('name') <span class="error">{{ $message }}</span> @enderror

            <input type="email" wire:model="email" placeholder="Input email">
            @error('email') <span class="error">{{ $message }}</span> @enderror

            <input type="password" wire:model="password" placeholder="Input password">
            @error('password') <span class="error">{{ $message }}</span> @enderror

            <input type="password" wire:model="password_confirmation" placeholder="Confirm password">

            <button type="submit" class="cursor-pointer">Register</button>
        </form>

        <a href="login">Login</a>
    </section>
</main>