<?php

use Livewire\Component;

new class extends Component
{
    public string $name = 'Predám Volkswagen Passat';
    public string $description = 'Volkswagen Passat 2.0 TDI, po STK, vo výbornom stave.';
    public string $image = 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg';
    public string $category = 'Vozidlá';
    public float $price = 45.00;
    public string $sellerInitials = 'JH';
    public string $sellerName = 'János Horváth';
    public string $sellerLocation = 'Dunajská Streda';
    public float $sellerRating = 1.8;
    public int $sellerReviews = 24;
};
?>

<div class="w-full max-w-64">
    <x-wirekit::card href="#" class="overflow-hidden">
        <div class="relative">
            <img src="{{ $image }}" alt="{{ $name }}" class="h-60 w-full object-cover" />
        </div>

        <x-wirekit::card.body>
            <div class="space-y-2">
                <div class="flex items-center justify-between gap-2">
                    <x-wirekit::badge intent="neutral">
                        {{ $category }}
                    </x-wirekit::badge>
                    <span class="text-xs text-gray-500">Pred 2 dňami</span>
                </div>

                <h3 class="line-clamp-1 text-sm font-semibold leading-5">
                    {{ $name }}
                </h3>

                <p class="text-xl font-bold tracking-tight">
                    {{ number_format($price, 2, ',', ' ') }} €
                </p>

                <x-wirekit::hover-card placement="bottom-start">
                    <x-slot:trigger>
                        <button type="button" class="flex w-full items-center gap-2 rounded-lg py-1 text-left transition hover:bg-gray-50">
                            <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gray-100 text-xs font-semibold text-gray-700">
                                {{ $sellerInitials }}
                            </div>
                            <span class="truncate text-sm font-medium">{{ $sellerName }}</span>
                        </button>
                    </x-slot:trigger>

                    <div class="w-64 space-y-3 p-2">
                        <div class="flex items-center gap-3">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-gray-100 text-lg font-semibold text-gray-700">
                                {{ $sellerInitials }}
                            </div>
                            <div class="min-w-0">
                                <p class="font-semibold">{{ $sellerName }}</p>
                                <p class="text-sm text-gray-500">Súkromný predajca</p>
                            </div>
                        </div>

                        <x-wirekit::divider />

                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Hodnotenie predajcu</span>
                            <span class="flex items-center gap-1 font-medium">
                                <x-wirekit::icon name="star" size="sm" class="text-amber-500" />
                                {{ number_format($sellerRating, 1, ',', '') }}
                            </span>
                        </div>

                        <p class="text-sm text-gray-500">{{ $sellerReviews }} hodnotení</p>

                        <div class="flex items-center gap-2 text-sm text-gray-500">
                            <x-wirekit::icon name="map-pin" size="sm" />
                            {{ $sellerLocation }}, Slovensko
                        </div>
                    </div>
                </x-wirekit::hover-card>

                <div class="flex items-center gap-1 text-xs text-gray-500">
                    <x-wirekit::icon name="map-pin" size="sm" />
                    <span class="truncate">{{ $sellerLocation }}</span>
                </div>
            </div>
        </x-wirekit::card.body>
    </x-wirekit::card>
</div>