<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <x-wirekit::navbar class="px-4 sm:px-6 lg:px-8">
        <x-slot:brand>
            <a href="/" aria-label="Bajoš domov" class="inline-flex items-center">
                <img src="/svg/bajos-logo.svg" alt="Bajoš logo" class="h-8 w-auto">
            </a>
        </x-slot:brand>

        <x-slot:actions>
            <div class="flex items-center gap-2">
                <x-wirekit::button type="button" intent="neutral" surface="ghost" size="sm">
                    Prihlásiť sa
                </x-wirekit::button>

                <x-wirekit::button type="button" size="sm">
                    Registrovať sa
                </x-wirekit::button>
            </div>
        </x-slot:actions>

        <x-wirekit::toolbar aria-label="Hľadať" class="w-full min-w-0 flex-1">
            <x-slot:leading>
                <div class="flex w-full min-w-0">
                    <input type="search" aria-label="Hľadať produkt" placeholder="Hľadať názov produktu..."
                        class="min-w-0 flex-1 rounded-l-lg border
                               border-r-0 border-gray-300 bg-white
                               px-4 py-2 text-sm
                               focus:z-10 focus:border-blue-500
                               focus:outline-none focus:ring-2
                               focus:ring-blue-500">

                    <button type="button" aria-label="Hľadať"
                        class="inline-flex shrink-0 items-center
                               justify-center rounded-r-lg border
                               border-gray-300 bg-gray-100 px-4
                               text-gray-700 hover:bg-gray-200
                               focus:z-10 focus:outline-none
                               focus:ring-2 focus:ring-blue-500">
                        <x-wirekit::icon name="search" />

                    </button>
                </div>
            </x-slot:leading>
        </x-wirekit::toolbar>
    </x-wirekit::navbar>
</div>
