<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Rules\RealPhoneNumber;
use Livewire\Attributes\Validate;
use Livewire\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';

    #[Validate(['nullable', 'string', 'max:16', new RealPhoneNumber()])]
    public string $phone = '';

    #[Validate('required|string|min:8')]
    public string $password = '';

    #[Validate('required|same:password')]
    public string $password_confirmation = '';

    #[Validate('accepted')]
    public bool $terms = false;

    protected function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email', 'max:100'],
            'phone' => ['nullable', 'string', 'max:20', 'regex:/^\+[1-9]\d{6,14}$/'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'terms' => ['accepted'],
        ];
    }

    protected function validationAttributes(): array
    {
        return [
            'name' => 'meno a priezvisko',
            'email' => 'e-mailová adresa',
            'phone' => 'telefónne číslo',
            'password' => 'Heslo',
            'terms' => 'podmienky používania',
        ];
    }

    public function register(): void
    {
        try {
            $validated = $this->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('wirekit:focus-invalid');
            throw $exception;
        }

        $user = User::create([
            'username' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?: null,
            'password' => $validated['password'],
        ]);

        Auth::login($user);
        session()->regenerate();

        $this->redirect(route('home'), navigate: true);
    }
};
?>

<x-wirekit::center class="min-h-screen px-4 py-12">
    <x-wirekit::stack gap="2xl" align="stretch" class="w-full max-w-md">
        <x-wirekit::stack gap="xs" align="center">
            <x-wirekit::heading level="1" size="3xl" weight="bold" align="center">
                Vytvorte si účet
            </x-wirekit::heading>

            <x-wirekit::text size="sm" intent="muted" align="center">
                Zaregistrujte sa a začnite používať náš web.
            </x-wirekit::text>
        </x-wirekit::stack>

        <x-wirekit::card surface="outline">
            <x-wirekit::card.body class="p-6 sm:p-8">
                <x-wirekit::form id="register-form" wire:submit="register" novalidate>
                    <x-wirekit::stack gap="md">
                        <x-wirekit::input label="Meno a priezvisko" name="name" wire:model.live.debounce.300ms="name"
                            placeholder="Ján Novák" autocomplete="name" required />

                        <x-wirekit::input label="E-mailová adresa" name="email" type="email"
                            wire:model.live.debounce.300ms="email" placeholder="jan.novak@gmail.com"
                            autocomplete="email" required />

                        <x-wirekit::phone label="Telefónne číslo" name="phone" wire:model.live.debounce.300ms="phone" country="SK"
                            :country-order="['SK', 'CZ', 'HU', 'PL', 'AT']" placeholder="900 123 456"
                            x-on:input="$el.value = $el.value.replace(/\D/g, '')" counter maxlength="12" />

                        <x-wirekit::password-input label="Heslo" name="password"
                            wire:model.live.debounce.300ms="password" autocomplete="new-password" :strength-meter="true"
                            hint="Použite aspoň 8 znakov, kombináciu písmen, čísel a symbolov." required />

                        <x-wirekit::password-input label="Potvrdenie hesla" name="password_confirmation"
                            wire:model.live.debounce.300ms="password_confirmation" autocomplete="new-password"
                            required />

                        <x-wirekit::checkbox name="terms" wire:model.live="terms" required>
                            <x-wirekit::text as="span" size="sm">
                                Súhlasím s
                            </x-wirekit::text>
                            <x-wirekit::link href="#">
                                podmienkami používania
                            </x-wirekit::link>
                            <x-wirekit::text as="span" size="sm">
                                a
                            </x-wirekit::text>
                            <x-wirekit::link href="#">
                                zásadami ochrany osobných údajov
                            </x-wirekit::link>.
                        </x-wirekit::checkbox>

                        <x-wirekit::button type="submit" intent="primary" class="w-full" wire:loading.attr="disabled"
                            wire:target="register">
                            <span wire:loading.remove wire:target="register">
                                Vytvoriť účet
                            </span>
                            <span wire:loading wire:target="register">
                                Vytváram účet...
                            </span>
                        </x-wirekit::button>
                    </x-wirekit::stack>
                </x-wirekit::form>

                <x-wirekit::stack gap="md" align="stretch" class="mt-6">
                    <x-wirekit::divider label="Už máte účet?" />

                    <x-wirekit::button href="{{ route('login') }}" intent="primary" surface="soft" class="w-full">
                        Prihlásiť sa
                    </x-wirekit::button>
                </x-wirekit::stack>
            </x-wirekit::card.body>
        </x-wirekit::card>
    </x-wirekit::stack>
</x-wirekit::center>
