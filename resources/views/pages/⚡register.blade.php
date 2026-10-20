<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 py-12">
    <div class="w-full max-w-md space-y-8">

        {{-- Logo --}}
        <div class="text-center">
            <div class="flex items-center justify-center rounded-2xl mx-auto mb-5 size-14 rounded-2xl">
                <x-wirekit::icon name="user-add" size="xl" />
            </div>

            <h1 class="text-3xl font-bold tracking-tight text-gray-900">
                Vytvorte si účet
            </h1>

            <p class="mt-2 text-sm text-gray-500">
                Zaregistrujte sa a začnite používať náš web.
            </p>
        </div>

        {{-- Registration Card --}}
        <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm sm:p-8">

            <form wire:submit="register" class="space-y-5">

                {{-- Name --}}
                <x-wirekit::input label="Meno a priezvisko" name="name" wire:model="name" placeholder="Ján Novák"
                    autocomplete="name" required />

                {{-- Email --}}
                <x-wirekit::input label="E-mailová adresa" name="email" type="email" wire:model="email"
                    placeholder="jan.novak@gmail.com" autocomplete="email" required />

                {{-- Phone (Optional) --}}
                <x-wirekit::input label="Telefónne číslo (nepovinné)" name="phone" type="tel" wire:model="phone"
                    placeholder="+421 900 123 456" autocomplete="tel" />

                {{-- Password --}}
                <x-wirekit::input label="Heslo" name="password" type="password" wire:model="password"
                    placeholder="Zadajte heslo" autocomplete="new-password" required />

                {{-- Confirm Password --}}
                <x-wirekit::input label="Potvrdenie hesla" name="password_confirmation" type="password"
                    wire:model="password_confirmation" placeholder="Zopakujte heslo" autocomplete="new-password"
                    required />

                {{-- Terms --}}
                <div class="flex items-start gap-3">
                    <input id="terms" type="checkbox" wire:model="terms" required
                        class="mt-1 size-4 rounded border-gray-300
                               text-indigo-600 focus:ring-indigo-500">

                    <label for="terms" class="text-sm leading-6 text-gray-600">
                        Súhlasím s
                        <a href="/terms" class="font-medium text-indigo-600 hover:underline">
                            podmienkami používania
                        </a>
                        a
                        <a href="/privacy" class="font-medium text-indigo-600 hover:underline">
                            zásadami ochrany osobných údajov
                        </a>.
                    </label>
                </div>

                {{-- Submit --}}
                <x-wirekit::button type="submit" intent="primary" class="w-full" wire:loading.attr="disabled"
                    wire:target="register">
                    <span wire:loading.remove wire:target="register">
                        Vytvoriť účet
                    </span>

                    <span wire:loading wire:target="register">
                        Vytváram účet...
                    </span>
                </x-wirekit::button>

            </form>

            {{-- Login Link --}}
            <div class="my-6 flex items-center gap-4">
                <div class="h-px flex-1 bg-gray-200"></div>
                <span class="text-xs text-gray-400">ALEBO</span>
                <div class="h-px flex-1 bg-gray-200"></div>
            </div>

            <p class="text-center text-sm text-gray-500">
                Už máte účet?
                <a href="#" class="font-semibold text-indigo-600 hover:underline">
                    Prihláste sa
                </a>
            </p>
        </div>

        <p class="text-center text-xs text-gray-400">
            © {{ date('Y') }} Vaša webová stránka. Všetky práva vyhradené.
        </p>

    </div>
</div>
