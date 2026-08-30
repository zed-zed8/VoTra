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

<main class="me-3 flex justify-center items-center">
    <section class="bg-surface h-fit w-80 md:w-md p-2">
        <h1 class="text-center text-text-primary mb-8 text-2xl">Register</h1>

        <form wire:submit.prevent='register' class="flex flex-col text-text-primary gap-5">
            <div class="flex flex-col gap-1">
                <label for="name">Name :</label>
                <input type="text" wire:model="name" id="name" placeholder="Input name" class="form-input">
                @error('name') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="email">Email :</label>
                <input type="email" wire:model="email" id="email" placeholder="Input email" class="form-input">
                @error('email') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="password">Password :</label>
                <input type="password" wire:model="password" id="password" placeholder="Input password"
                    class="form-input">
                @error('password') <span class="text-error">{{ $message }}!</span> @enderror
            </div>

            <div class="flex flex-col gap-1">
                <label for="password_confirmation">Confirm Password :</label>
                <input type="password" wire:model="password_confirmation" placeholder="Confirm password"
                    id="password_confirmation" class="form-input">
            </div>

            <button type="submit"
                class="col-span-2 cursor-pointer bg-primary-800 p-1 rounded-lg hover:bg-primary-700 active:bg-primary-700">Register</button>
        </form>

        <div class="text-text-muted text-end">
            Already have an account? <a href="login" class="link">Login Now</a>
        </div>
    </section>
</main>