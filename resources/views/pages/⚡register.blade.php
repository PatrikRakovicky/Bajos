<?php

use Illuminate\Validation\ValidationException;
use Livewire\Component;

new class extends Component {
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $password = '';
    public string $password_confirmation = '';
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
            $this->validate();
        } catch (ValidationException $exception) {
            $this->dispatch('wirekit:focus-invalid');

            throw $exception;
        }
        $this->redirect(route('home'), navigate: true);
    }
};
?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 py-12">
    <div class="w-full max-w-md space-y-8">

        {{-- Heading --}}
        <div class="text-center">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                Vytvorte si účet
            </h1>

            <p class="mt-2 text-sm text-gray-500">
                Zaregistrujte sa a začnite používať náš web.
            </p>
        </div>

        {{-- Registration Card --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

            <x-wirekit::form id="register-form" wire:submit="register">
                <x-wirekit::stack gap="md">

                    {{-- Name --}}
                    <x-wirekit::input label="Meno a priezvisko" name="name" wire:model.live.debounce.300ms="name"
                        placeholder="Ján Novák" autocomplete="name" required />

                    {{-- Email --}}
                    <x-wirekit::input label="E-mailová adresa" name="email" type="email"
                        wire:model.live.debounce.300ms="email" placeholder="jan.novak@gmail.com" autocomplete="email"
                        required />

                    {{-- Phone (optional) --}}
                    <x-wirekit::phone label="Telefónne číslo (nepovinné)" name="phone" :value="$phone"
                        wire:model="phone" country="SK" :country-order="['SK', 'CZ', 'HU', 'PL', 'AT']" placeholder="900 123 456" />

                    {{-- Password --}}
                    <x-wirekit::password-input label="Heslo" name="password" wire:model="password"
                        autocomplete="new-password" :strength-meter="true"
                        hint="Použite aspoň 8 znakov, kombináciu písmen, čísel a symbolov." required />

                    {{-- Confirm password --}}
                    <x-wirekit::password-input label="Potvrdenie hesla" name="password_confirmation"
                        wire:model="password_confirmation" autocomplete="new-password" required />

                    {{-- Terms --}}
                    <x-wirekit::checkbox name="terms" wire:model="terms" required>
                        Súhlasím s
                        <a href="/terms" class="font-medium text-indigo-600 hover:underline">podmienkami používania</a>
                        a
                        <a href="/privacy" class="font-medium text-indigo-600 hover:underline">zásadami ochrany osobných
                            údajov</a>.
                    </x-wirekit::checkbox>

                    {{-- Submit --}}
                    <x-wirekit::button type="submit" intent="primary" class="w-full" wire:loading.attr="disabled"
                        wire:target="register">
                        <span wire:loading.remove wire:target="register">Vytvoriť účet</span>
                        <span wire:loading wire:target="register">Vytváram účet...</span>
                    </x-wirekit::button>

                </x-wirekit::stack>
            </x-wirekit::form>

            {{-- Divider --}}
            <div class="my-6 flex items-center gap-4">
                <div class="h-px flex-1 bg-gray-200"></div>
                <span class="text-xs text-gray-400">ALEBO</span>
                <div class="h-px flex-1 bg-gray-200"></div>
            </div>

            {{-- Login link --}}
            <p class="text-center text-sm text-gray-500">
                Už máte účet?
                <a href="{{ route('home') }}" class="font-semibold text-indigo-600 hover:underline">
                    Prihláste sa
                </a>
            </p>
        </div>

        {{-- Footer --}}
        <p class="text-center text-xs text-gray-400">
            © {{ date('Y') }} Vaša webová stránka. Všetky práva vyhradené.
        </p>

    </div>
</div>
