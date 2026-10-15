<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <x-wirekit::navbar class="px-4 sm:px-6 lg:px-8">
        <x-slot:brand>
            <a href="/" aria-label="Bajoš domov" class="inline-flex shrink-0 items-center">
                <img src="/svg/bajos-logo.svg" alt="Bajoš logo" class="h-8 w-auto">
            </a>
        </x-slot:brand>

        <div class="min-w-0 flex-1 px-4 sm:px-6">
            <div class="relative w-full">
                <x-wirekit::input aria-label="Hľadať" name="hladat" type="search" placeholder="Názov produktu"
                    class="w-full pr-12" />

                <div class="absolute inset-y-0 right-1 flex items-center">
                    <x-wirekit::button type="button" intent="neutral" surface="ghost" size="sm"
                        aria-label="Hľadať" class="!h-8 !w-8 !p-0">
                        <x-slot:iconLeft>
                            <x-wirekit::icon name="search" size="sm" />
                        </x-slot:iconLeft>
                    </x-wirekit::button>
                </div>
            </div>
        </div>

        <x-slot:actions>
            <div class="flex shrink-0 items-center gap-2">
                <x-wirekit::button type="button" intent="neutral" surface="ghost" size="sm">
                    Prihlásiť sa
                </x-wirekit::button>

                <x-wirekit::button type="button" size="sm">
                    Registrovať sa
                </x-wirekit::button>
            </div>
        </x-slot:actions>
    </x-wirekit::navbar>
</div>
