<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Livewire\Partials\Navbar;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class ProductsPage extends Component
{
    use WithPagination;
    use LivewireAlert;

    #[Url]
    public $selected_categories = [];

    #[Url]
    public $selected_brands = [];

    #[Url] 
    public $featured;


    #[Url]
    public $on_sale;


    #[Url]
    public $price_range= 400000;

    #[Url]
    public $sort= 'latest';


    public $quantity = 1;


    // add product to card method 

    public function addToCart($product_id){
       $total_count=CartManagement::addCartItemToCartWithQuantity($product_id, $this->quantity);

       $this->dispatch('update-cart-count', total_count:$total_count)->to(Navbar::class);

       $this->alert('success', 'Product added to cart successfully', [
           'position' => 'bottom-end',
           'timer' => 3000, 
           'toast' => true
       ]);
    }
    public function render()
    {
        $productsQuery= Product::where('is_active', 1);


        if(!empty($this->selected_categories)){
            $productsQuery->whereIn('category_id', $this->selected_categories);
        }


        if(!empty($this->selected_brands)){
            $productsQuery->whereIn('brand_id', $this->selected_brands);
        }

        if(!empty($this->featured)){
            $productsQuery->where('is_featured', 1);
        }


        if(!empty($this->on_sale)){
            $productsQuery->where('on_sale', 1);
        }


        if(!empty($this->price_range)){
            $productsQuery->whereBetween('price',  [0, $this->price_range]);
        }

        if($this->sort == 'latest'){
            $productsQuery->latest();
        }

        if($this->sort == 'price'){
            $productsQuery->orderBy('price', 'desc');
        }


        return view('livewire.products-page', [
            'products' => $productsQuery->paginate(6),
            'brands'=>Brand::where('is_active', 1)->get(['id', 'name', 'slug']),
            'categories'=>Category::where('is_active', 1)->get(['id', 'name', 'slug'])
        ]);
    }

    public static function currency($value, $currency = 'IDR', $decimal = 0)
    {
        return $currency . ' ' . number_format($value, $decimal, ',', '.');
    }

}
