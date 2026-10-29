<?php

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public Category $category;
    public ?Subcategory $subcategory = null;

    public function mount(Category $category, ?Subcategory $subcategory = null): void
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
    }

    public function paginationView(): string
    {
        return 'wirekit::pagination.livewire';
    }

    #[Computed]
    public function breadcrumbs(): array
    {
        $trail = [['label' => 'Domov', 'href' => route('home'), 'icon' => 'home']];

        if ($this->subcategory) {
            $trail[] = [
                'label' => $this->category->category_name,
                'href' => route('category.show', $this->category->slug),
            ];
            $trail[] = ['label' => $this->subcategory->subcategory_name];
        } else {
            $trail[] = ['label' => $this->category->category_name];
        }

        return $trail;
    }

    #[Computed]
    public function subcategories()
    {
        return $this->category->subcategories()->orderBy('subcategory_name')->get();
    }

    #[Computed]
    public function products()
    {
        return Product::query()
            ->with(['category', 'subcategory', 'user'])
            ->where('category_id', $this->category->id)
            ->when($this->subcategory, fn($q) => $q->where('subcategory_id', $this->subcategory->id))
            ->latest()
            ->paginate(12);
    }
};
?>

<div class="min-h-screen bg-background text-foreground">
    <main class="mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">
        <x-wirekit::stack gap="xl" align="stretch">

            <x-wirekit::breadcrumb :items="$this->breadcrumbs" />

            <x-wirekit::stack gap="xs" align="start">
                <x-wirekit::heading level="1" size="3xl" weight="bold">
                    {{ $subcategory?->subcategory_name ?? $category->category_name }}
                </x-wirekit::heading>

                <x-wirekit::text size="sm" intent="muted">
                    Počet inzerátov: {{ $this->products->total() }}
                </x-wirekit::text>
            </x-wirekit::stack>

            @if ($this->subcategories->isNotEmpty())
                <div class="flex flex-wrap gap-2">
                    <x-wirekit::button href="{{ route('category.show', $category->slug) }}" wire:navigate size="sm"
                        :intent="$subcategory ? 'neutral' : 'primary'" :surface="$subcategory ? 'outline' : null">
                        Všetko
                    </x-wirekit::button>

                    @foreach ($this->subcategories as $sub)
                        <x-wirekit::button href="{{ route('subcategory.show', [$category->slug, $sub->slug]) }}"
                            wire:navigate size="sm" :intent="$subcategory?->id === $sub->id ? 'primary' : 'neutral'" :surface="$subcategory?->id === $sub->id ? null : 'outline'"
                            wire:key="sub-{{ $sub->id }}">
                            {{ $sub->subcategory_name }}
                        </x-wirekit::button>
                    @endforeach
                </div>
            @endif

            @if ($this->products->isEmpty())
                <x-wirekit::card surface="outline">
                    <x-wirekit::card.body class="p-8">
                        <x-wirekit::stack gap="sm" align="center">
                            <x-wirekit::icon name="gift" size="xl" />
                            <x-wirekit::text intent="muted" align="center">
                                V tejto kategórii zatiaľ nie sú žiadne inzeráty.
                            </x-wirekit::text>
                        </x-wirekit::stack>
                    </x-wirekit::card.body>
                </x-wirekit::card>
            @else
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 sm:gap-5 lg:grid-cols-4">
                    @foreach ($this->products as $product)
                        <livewire:product-card :product="$product" :key="'product-' . $product->id" />
                    @endforeach
                </div>

                <div class="flex justify-center">
                    {{ $this->products->links() }}
                </div>
            @endif

        </x-wirekit::stack>
    </main>
</div>
