<?php

namespace App\View\Components;

use Closure;
use Laravel\Cashier\Cashier;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProductList extends Component
{

    public $products;

    /**
     * Create a new component instance.
     */
    public function __construct(
        array|object $products
    ) {
        $this->products = $products;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|array
    {
        return view(
            'components.product-list', [
            'products' => $this->products
            ]
        );
    }
}
