<div>
    <ul>
        @foreach ($products as $product)
            <li>
                <x-product-card :product="$product" />
            </li>
        @endforeach
    </ul>
</div>