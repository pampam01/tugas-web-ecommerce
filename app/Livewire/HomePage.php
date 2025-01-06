<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\Attributes\Title;


#[Title('Home')]

class HomePage extends Component
{

    use LivewireAlert;
    public $quantity = 1;

    public function addToCart($product_id)
    {
        $total_count = CartManagement::addCartItemToCartWithQuantity($product_id, $this->quantity);

        $this->dispatch('update-cart-count', total_count: $total_count)->to(Navbar::class);

        $this->alert('success', 'Product added to cart successfully', [
            'position' => 'bottom-end',
            'timer' => 3000,
            'toast' => true
        ]);
    }


    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Category::where('is_active', 1)->get();
        $products = Product::where('is_featured', 1)->get();
        return view('livewire.home-page', [
            'brands' => $brands,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
