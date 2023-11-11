<?php
namespace App\Helper;

class Cart
{
    public $products = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($cart = null)
    {
        if ($cart) 
        {
            $this->products = $cart->products;
            $this->totalQuantity = $cart->totalQuantity;
            $this->totalPrice = $cart->totalPrice;
        }
    }


    public function addCart($product, $id)
    {
        $newProduct = [
            'quantity' => 0,
            'productInfo' => $product,
            'price' => 0,
        ];
        if($this->products)
        {
            if(array_key_exists($id, $this->products))
            {
                $newProduct = $this->products[$id];
            }
        } 
        $newProduct['quantity']++;
        $newProduct['price'] = $newProduct['quantity'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalQuantity++;
        $this->totalPrice += $product->price; 
    }
    
    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    public function getCartContents()
    {
        return $this->products;
    }

    public function updateProductQuantity($id, $quantity)
    {
        // Implement updating product quantity here.
    }

    public function removeProduct($id)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice  -= $this->products[$id]['price']; 
        unset($this->products[$id]);
    }

    public function clearCart()
    {
        $this->products = [];
        $this->totalQuantity = 0;
        $this->totalPrice = 0;
    }

    public function calculateTotalPrice()
    {
        // Implement calculating the total price of all products in the cart here.
    }
}
?>
