<?php


namespace App;


class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalQuantity = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->products = $oldCart->products;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
        }
    }

    public function addToCart($product)
    {
        $storeItem = [
            "item" => $product,
            "itemQuantity" => 0,
            "itemPrice" => 0
        ];

        if ($this->products) {
            if (array_key_exists($product->id, $this->products)) {
                $storeItem = $this->products[$product->id];
                $this->totalQuantity = count($this->products);
            } else {
                $this->totalQuantity++;
            }
        } else {
            $this->totalQuantity++;
        }

        $storeItem['itemQuantity']++;
        $storeItem['itemPrice'] = $product->priceCake * $storeItem['itemQuantity'];

        $this->products[$product->id] = $storeItem;
        $this->totalPrice += $storeItem['itemPrice'];
    }
}
