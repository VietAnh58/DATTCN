<?php

namespace App\Helper;

class Cart
{
    public $products = [];
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($cart = null)
    {
        if ($cart) {
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

        if ($this->products && array_key_exists($id, $this->products)) {
            $newProduct = $this->products[$id];
        }

        $newProduct['quantity']++;

        $price = ($product->sale_price > 0) ? $product->sale_price : $product->price;
        $newProduct['price'] = $newProduct['quantity'] * $price;

        $this->products[$id] = $newProduct;
        $this->totalQuantity++;
        $this->totalPrice += $newProduct['price'];
    }

    public function addProductWithQuantity($product, $id, $quantity)
    {
        $newProduct = [
            'quantity' => 0,
            'productInfo' => $product,
            'price' => 0,
        ];

        if ($this->products && array_key_exists($id, $this->products)) {
            $newProduct = $this->products[$id];
        }

        $newProduct['quantity'] += $quantity;

        $price = ($product->sale_price > 0) ? $product->sale_price : $product->price;
        $newProduct['price'] = $newProduct['quantity'] * $price;

        $this->products[$id] = $newProduct;
        $this->totalQuantity += $quantity;
        $this->totalPrice += $newProduct['price'];
    }


    public function getTotalPrice()
    {
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product['price'];
        }

        return $totalPrice;
    }

    public function getCartContents()
    {
        return $this->products;
    }

    public function updateProductQuantity($id, $quantity)
    {
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalPrice -= $this->products[$id]['price'];

        $this->products[$id]['quantity'] = $quantity;
        $this->products[$id]['price'] = $this->products[$id]['quantity'] * $this->products[$id]['productInfo']->price;

        $this->totalQuantity += $this->products[$id]['quantity'];
        $this->totalPrice += $this->products[$id]['price'];
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
        $totalPrice = 0;

        foreach ($this->products as $product) {
            $totalPrice += $product['price'];
        }

        return $totalPrice;
    }

    public function calculateTotalPriceOfEachProduct()
    {
        $totalPriceOfEachProduct = [];

        foreach ($this->products as $id => $product) {
            $totalPriceOfEachProduct[$id] = $product['quantity'] * $product['productInfo']->price;
        }

        return $totalPriceOfEachProduct;
    }
}
