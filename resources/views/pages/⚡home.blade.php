<?php

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component {
    #[Computed]
    public function categories()
    {
        return Category::orderBy('id')->get();
    }

    #[Computed]
    public function latestProducts()
    {
        return Product::with(['category', 'user'])
            ->latest()
            ->take(8)
            ->get();
    }
};
?>

<div class="min-h-screen bg-background text-foreground">
    <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
        <section
            class="overflow-hidden rounded-3xl border border-border bg-card px-5 py-6 sm:px-8 sm:py-8 lg:px-10 lg:py-8">
            <div class="grid items-center gap-6 lg:grid-cols-[1.1fr_0.9fr] lg:gap-10">
                <div class="max-w-xl">
                    <h1 class="mt-3 text-3xl font-bold leading-tight tracking-tight sm:text-4xl">
                        Dobré veci si zaslúžia
                        <span class="text-primary">nový príbeh.</span>
                    </h1>

                    <p class="mt-3 max-w-md text-sm leading-6 text-muted-foreground">
                        Objav výhodné kúsky z druhej ruky alebo predaj veci,
                        ktoré už nepotrebuješ.
                    </p>

                    <div class="mt-5 flex flex-wrap gap-3">
                        <x-wirekit::button>
                            <x-slot:iconLeft>
                                <x-wirekit::icon name="shopping-bag" size="sm" />
                            </x-slot:iconLeft>
                            Objaviť ponuku
                        </x-wirekit::button>

                        <x-wirekit::button intent="neutral" surface="outline">
                            <x-slot:iconLeft>
                                <x-wirekit::icon name="plus-circle" size="sm" />
                            </x-slot:iconLeft>
                            Pridať inzerát
                        </x-wirekit::button>
                    </div>
                </div>
            </div>
        </section>


        <section class="mt-12 sm:mt-16">
            <div>
                <h2 class="text-2xl font-bold tracking-tight sm:text-3xl">
                    Čo dnes hľadáš?
                </h2>
                <p class="mt-2 text-sm text-muted-foreground sm:text-base">
                    Od každodenných kúskov až po nečakané poklady.
                </p>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                @foreach ($this->categories as $category)
                    <a href="{{ route('category.show', $category->slug) }}" wire:navigate class="group block">
                        <x-wirekit::card surface="outline" class="h-full transition-colors group-hover:bg-muted/40">
                            <x-wirekit::card.body class="p-4 sm:p-5">
                                <x-wirekit::stack gap="md" align="start">
                                    <div
                                        class="flex size-11 items-center justify-center rounded-xl bg-muted/60 text-foreground transition-colors group-hover:bg-primary group-hover:text-primary-foreground">
                                        <x-wirekit::icon :name="$category->category_icon ?? 'squares-2x2'" size="lg" />
                                    </div>

                                    <x-wirekit::heading level="3" size="md" weight="semibold">
                                        {{ $category->category_name }}
                                    </x-wirekit::heading>
                                </x-wirekit::stack>
                            </x-wirekit::card.body>
                        </x-wirekit::card>
                    </a>
                @endforeach
            </div>
        </section>

        <section class="mt-12 sm:mt-16">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                <div>
                    <h2 class="text-2xl font-bold tracking-tight sm:text-3xl">
                        Najnovšie kúsky
                    </h2>
                    <p class="mt-2 text-sm text-muted-foreground sm:text-base">
                        Čerstvé prírastky, ktoré si zaslúžia druhú šancu.
                    </p>
                </div>

                <x-wirekit::button intent="neutral" surface="ghost" size="sm">
                    Zobraziť všetky
                    <x-slot:iconRight>
                        <x-wirekit::icon name="arrow-right" size="sm" />
                    </x-slot:iconRight>
                </x-wirekit::button>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-5 lg:grid-cols-4">
                @foreach ($this->latestProducts as $product)
                    <livewire:product-card :product="$product" :key="'product-' . $product->id" />
                @endforeach
            </div>
        </section>

        <section class="mt-12 grid gap-4 md:grid-cols-2 sm:mt-16">
            <div class="flex flex-col justify-between gap-6 rounded-3xl border border-border bg-muted/20 p-6 sm:p-8">
                <div>
                    <div class="flex size-12 items-center justify-center rounded-2xl bg-card">
                        <x-wirekit::icon name="gift" size="xl" />
                    </div>
                    <h2 class="mt-5 text-xl font-bold sm:text-2xl">
                        Máš doma niečo navyše?
                    </h2>
                    <p class="mt-2 max-w-md text-sm leading-6 text-muted-foreground sm:text-base">
                        Poteš niekoho ďalšieho. Predaj veci, ktoré už nepoužívaš,
                        a uvoľni si miesto na nové.
                    </p>
                </div>

                <div>
                    <x-wirekit::button>
                        Pridať inzerát
                        <x-slot:iconRight>
                            <x-wirekit::icon name="arrow-right" size="sm" />
                        </x-slot:iconRight>
                    </x-wirekit::button>
                </div>
            </div>

            <div class="flex flex-col justify-between gap-6 rounded-3xl border border-border bg-card p-6 sm:p-8">
                <div>
                    <div class="flex size-12 items-center justify-center rounded-2xl bg-muted/60">
                        <x-wirekit::icon name="sparkles" size="xl" />
                    </div>
                    <h2 class="mt-5 text-xl font-bold sm:text-2xl">
                        Nakupuj s dobrým pocitom
                    </h2>
                    <p class="mt-2 max-w-md text-sm leading-6 text-muted-foreground sm:text-base">
                        Daj použitým veciam nový život. Menej odpadu,
                        viac radosti a kúsky, ktoré majú čo ponúknuť.
                    </p>
                </div>

                <div class="flex items-center gap-2 text-sm font-medium text-muted-foreground">
                    <x-wirekit::icon name="arrow-path" size="sm" />
                    <span>Každý kúsok môže mať nový príbeh.</span>
                </div>
            </div>
        </section>
    </main>
</div>
