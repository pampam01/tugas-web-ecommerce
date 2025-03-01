<?php 


namespace App\Helpers;

use App\Models\Product;
use Illuminate\Support\Facades\Cookie;

class CartManagement
{
    // add item to cart 
    static public function addCartItemToCartWithQuantity($product_id, $quantity= 1){
        $cart_items = self::getCartItemsFromCookie();

        $existing_item = null;

        foreach($cart_items as $key => $item){
            if($item['product_id'] == $product_id){
                $existing_item = $key;
                break;
            }
        }

        if($existing_item !== null){
            $cart_items[$existing_item]['quantity'] = $quantity;
            $cart_items[$existing_item]['total_amount'] = $cart_items[$existing_item]['quantity'] * $cart_items[$existing_item]['unit_amount'];
        }else{
            $product = Product::where('id', $product_id)->first(['id', 'name', 'price', 'images']);

            if($product){
                $cart_items[] = [
                    'product_id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->images[0],
                    'quantity' => $quantity,
                    'unit_amount' => $product->price,
                    'total_amount' => $product->price
                ];
            }
        }

        self::addCartItemsTOCookie($cart_items);
        return count($cart_items);
    }

    // remove item to cart 
    static public function removeCartItemFromCart($product_id){
        $cart_items = self::getCartItemsFromCookie();
    
        foreach($cart_items as $key => $item){
            if($item['product_id'] == $product_id){
                unset($cart_items[$key]);
                break;
            }
        }
    
        self::addCartItemsTOCookie($cart_items);
        return $cart_items;
    }

    // add items to cookie until 3 days
    static public function addCartItemsTOCookie($cart_items){
        Cookie::queue('cart_items', json_encode($cart_items), 60 * 60 * 24);
    }

    // clean cart items from cookie 
    static public function cleanCartItemsFromCookie(){
        Cookie::queue(Cookie::forget('cart_items'));
    }


    // get all cart items from cookie
    static public function getCartItemsFromCookie(){
        $cart_items = json_decode(Cookie::get('cart_items'), true);
        if(!$cart_items){
            $cart_items = [];
        }

        return $cart_items;
    }

    //increment cart item quantity
    static public function incrementCartItemQuantity($product_id){
        $cart_items = self::getCartItemsFromCookie();

        foreach($cart_items as $key => $item){
            if($item['product_id'] == $product_id){
                $cart_items[$key]['quantity'] += 1;
                $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
                // break;
            }
        }

        self::addCartItemsTOCookie($cart_items);
        return $cart_items;
    }

    //decrement cart item quantity
    static public function decrementCartItemQuantity($product_id){
        $cart_items = self::getCartItemsFromCookie();

        foreach($cart_items as $key => $item){
            if($item['product_id'] == $product_id){
               if($item['quantity'] > 1){
                    $cart_items[$key]['quantity'] -= 1;
                    $cart_items[$key]['total_amount'] = $cart_items[$key]['quantity'] * $cart_items[$key]['unit_amount'];
                    // break;
               }
            }
        }

        self::addCartItemsTOCookie($cart_items);
        return $cart_items;
    }

    //calculate grand total
    static public function calculateGrandTotal($items){
        return array_sum(array_column($items, 'total_amount'));
    }
   
}