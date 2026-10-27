<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    #[Validate('required|string|email|max:254')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    #[Validate('boolean')]
    public bool $remember = false;

    public function login(): void
    {
        try {
            $validated = $this->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('wirekit:focus-invalid');
            throw $exception;
        }

        $throttleKey = Str::transliterate(Str::lower($validated['email']) . '|' . request()->ip());

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $seconds = RateLimiter::availableIn($throttleKey);

            $this->addError('email', "Príliš veľa pokusov o prihlásenie. Skúste to znova o {$seconds} s.");
            $this->dispatch('wirekit:focus-invalid');

            return;
        }

        if (! Auth::attempt(
            ['email' => $validated['email'], 'password' => $validated['password']],
            $validated['remember']
        )) {
            RateLimiter::hit($throttleKey);

            $this->addError('email', 'Zadané prihlasovacie údaje sú nesprávne.');
            $this->reset('password');
            $this->dispatch('wirekit:focus-invalid');

            return;
        }

        RateLimiter::clear($throttleKey);
        session()->regenerate();

        $this->redirectIntended(default: route('home'), navigate: true);
    }
};
?>

<x-wirekit::center class="min-h-screen px-4 py-12">
    <x-wirekit::stack gap="2xl" align="stretch" class="w-full max-w-md">
        <x-wirekit::stack gap="xs" align="center">
            <x-wirekit::heading level="1" size="3xl" weight="bold" align="center">
                Prihláste sa
            </x-wirekit::heading>

            <x-wirekit::text size="sm" intent="muted" align="center">
                Vitajte späť! Zadajte svoje prihlasovacie údaje.
            </x-wirekit::text>
        </x-wirekit::stack>

        <x-wirekit::card surface="outline">
            <x-wirekit::card.body class="p-6 sm:p-8">
                <x-wirekit::form id="login-form" wire:submit="login" novalidate>
    <x-wirekit::stack gap="md">
        <x-wirekit::input label="E-mailová adresa" name="email" type="email"
            wire:model="email" placeholder="jan.novak@gmail.com"
            autocomplete="email" required />

        <x-wirekit::password-input label="Heslo" name="password"
            wire:model="password" autocomplete="current-password" required />

        <x-wirekit::checkbox name="remember" wire:model="remember">
            <x-wirekit::text as="span" size="sm">
                Zapamätať si ma
            </x-wirekit::text>
        </x-wirekit::checkbox>

        <x-wirekit::button type="submit" intent="primary" class="w-full" wire:loading.attr="disabled"
            wire:target="login">
            <span wire:loading.remove wire:target="login">
                Prihlásiť sa
            </span>
            <span wire:loading wire:target="login">
                Prihlasujem...
            </span>
        </x-wirekit::button>

        <x-wirekit::stack align="center">
            <x-wirekit::link href="#">
                Zabudli ste heslo?
            </x-wirekit::link>
        </x-wirekit::stack>
    </x-wirekit::stack>
</x-wirekit::form>

                <x-wirekit::stack gap="md" align="stretch" class="mt-6">
                    <x-wirekit::divider label="Nemáte účet?" />

                    <x-wirekit::button href="{{ route('register') }}" intent="primary" surface="soft" class="w-full">
                        Vytvoriť účet
                    </x-wirekit::button>
                </x-wirekit::stack>
            </x-wirekit::card.body>
        </x-wirekit::card>
    </x-wirekit::stack>
</x-wirekit::center>
