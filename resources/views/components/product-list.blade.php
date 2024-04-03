<div class="bg-white sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mt-6 flex flex-wrap justify-center gap-6">
            @foreach ($products as $product)
                <div class="flex-none w-full sm:w-1/2 lg:w-1/3">
                    <x-product-card :product="$product" />
                </div>
            @endforeach
        </div>
    </div>
</div>

