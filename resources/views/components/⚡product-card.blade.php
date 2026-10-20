<?php

use Livewire\Component;

new class extends Component
{
    public string $name = 'Predám Volkswagen Passat';
    public string $description = 'Volkswagen Passat 2.0 TDI, po STK, vo výbornom stave.';
    public string $image = 'https://www.svgrepo.com/show/508699/landscape-placeholder.svg';
    public string $category = 'Vozidlá';
    public string $productUrl = '#product';
    public string $sellerUrl = '#seller';
    public float $price = 45.00;
    public string $sellerInitials = 'JH';
    public string $sellerName = 'János Horváth';
    public string $sellerLocation = 'Dunajská Streda';
    public float $sellerRating = 1.8;
    public int $sellerReviews = 14;
};
?>

<x-wirekit::product-card
    name="{{ $name }}"
    href="{{ $productUrl }}"
    image="{{ $image }}"
    image-alt="{{ $name }}"
    :price="$price"
    currency="EUR"
    :description="$description"
    class="group min-w-0 transition-shadow duration-300 hover:shadow-xl"
>
    <x-slot:action>
    <div class="w-full min-w-0 space-y-3">
        <a href="{{ $productUrl }}" wire:navigate class="block w-full rounded-lg transition-opacity focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-primary">
            <div class="flex w-full min-w-0 items-center justify-between gap-2">
                <x-wirekit::badge variant="soft" color="primary" size="sm">
                    {{ $category }}
                </x-wirekit::badge>
                <div class="shrink-0 text-xs text-muted-foreground">
                    <x-wirekit::date-separator :date="now()->subDays(1)" />
                </div>
            </div>
        </a>

        <x-wirekit::hover-card placement="bottom-start">
            <x-slot:trigger>
                <a href="{{ $sellerUrl }}" wire:navigate aria-label="Profil predajcu {{ $sellerName }}" class="box-border grid w-full min-w-0 grid-cols-[auto_minmax(0,1fr)_auto_auto] items-center gap-2 rounded-xl border border-gray-200 bg-white p-3 text-left transition-colors hover:border-primary/30 hover:bg-primary/5">
                    <x-wirekit::avatar initials="{{ $sellerInitials }}" size="md" />

                    <div class="min-w-0">
                        <p class="truncate text-sm font-semibold leading-5 text-gray-900">{{ $sellerName }}</p>
                        <div class="mt-1 flex min-w-0 items-center gap-1 text-xs leading-4 text-muted-foreground">
                            <x-wirekit::icon name="map-pin" size="sm" />
                            <span class="truncate">{{ $sellerLocation }}</span>
                        </div>
                    </div>

                    <div class="flex shrink-0 items-center gap-1 text-sm font-medium text-gray-600">
                        <x-wirekit::icon name="star" size="sm" class="text-amber-500" />
                        <span>{{ number_format($sellerRating, 1, ',', '') }}</span>
                    </div>

                    <x-wirekit::icon name="chevron-right" size="sm" class="text-gray-400" />
                </a>
            </x-slot:trigger>

            <div class="w-64 max-w-[calc(100vw-2rem)] space-y-3 p-2">
                <div class="flex min-w-0 items-center gap-3">
                    <x-wirekit::avatar initials="{{ $sellerInitials }}" size="lg" />
                    <div class="min-w-0 flex-1">
                        <p class="truncate font-semibold">{{ $sellerName }}</p>
                        <p class="text-sm text-gray-500">Súkromný predajca</p>
                    </div>
                </div>

                <x-wirekit::divider />

                <div class="flex items-center justify-between gap-2 text-sm">
                    <span class="text-gray-500">Hodnotenie predajcu</span>
                    <span class="flex shrink-0 items-center gap-1 font-medium">
                        <x-wirekit::icon name="star" size="sm" class="text-amber-500" />
                        {{ number_format($sellerRating, 1, ',', '') }}
                    </span>
                </div>

                <p class="text-sm text-gray-500">{{ $sellerReviews }} hodnotení</p>

                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <x-wirekit::icon name="map-pin" size="sm" />
                    <span>{{ $sellerLocation }}, Slovensko</span>
                </div>
            </div>
        </x-wirekit::hover-card>
    </div>
</x-slot:action>
</x-wirekit::product-card>