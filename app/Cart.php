<?php

namespace App;

use Illuminate\Support\Facades\Session;

class Cart
{
    public $products = null;
    public $totaPrice = 0;
    public $totalQuanty = 0;
    public $totalSized = '';
    public $totalColor = '';
    public function __construct($cart)
    {

        if ($cart) {
            $this->products = $cart->products;
            $this->totaPrice = $cart->totaPrice;
            $this->totalQuanty = $cart->totalQuanty;
            $this->totalSized = $cart->totalSized;
            $this->totalColor = $cart->totalColor;
        }
    }
    public function AddCart($product, $id, $sl, $sized, $color)
    {

        // khởi tạo sản phẩm mới
        $newProduct = ['quantily' => 0, 'price' => $product->price, 'productInfo' => $product, 'sized' => $sized, 'color' => $color]; // khởi đầu

        if ($this->products) {
            if (array_key_exists($id . $sized . $color, $this->products)) { // tìm được sản phẩm trùng
                if ($this->products[$id . $sized . $color]['sized'] == $sized && $this->products[$id . $sized . $color]['color'] == $color) {
                    $newProduct = $this->products[$id . $sized . $color];
                }
            }
        }

        $newProduct['quantily'] += $sl;


        // moist
        $newProduct['sized'] = $sized;
        $newProduct['color'] = $color;

        $newProduct['price'] = $sl * $product->price;
        // dd($newProduct['price']);
        $this->products[$id . $sized . $color] = $newProduct;

        $this->totaPrice += $newProduct['price'];

        // $this->products[$id]['price'] = $sl * $this->products[$id]['productInfo']->price;
        // $this->totaPrice += $this->products[$id]['price'];
        $this->calcQuantity();

        // $this->totalSized =  $this->products[$id]['sized'];
    }
    public function deleteCart($id, $sized, $color)
    {

        $this->totalQuanty -= $this->products[$id . $sized . $color]['quantily'];
        $this->totaPrice -= $this->products[$id . $sized . $color]['price'];
        unset($this->products[$id . $sized . $color]);
    }
    public function deleteListCart($id)
    {

        $this->totalQuanty -= $this->products[$id]['quantily'];
        $this->totaPrice -= $this->products[$id]['price'];
        unset($this->products[$id]);
    }
    // public function saveCart($id, $quantily)
    // {
    //     $this->totalQuanty -= $this->products[$id]['quantily'];
    //     $this->totaPrice -= $this->products[$id]['price'];

    //     $this->products[$id]['quantily'] = $quantily;
    //     $this->products[$id]['price'] = $quantily * $this->products[$id]['productInfo']->price;

    //     $this->totalQuanty += $this->products[$id]['quantily'];
    //     $this->totaPrice += $this->products[$id]['price'];
    // }
    public function saveCart($id, $quantily)
    {

        $oldProduct =  $this->products[$id];
        $oldProduct['quantily'] = $quantily;
        $oldProduct['price'] = $quantily * $oldProduct['productInfo']->price;
        $this->products[$id] = $oldProduct;
        $this->calcQuantity();
    }

    public function calcQuantity()
    {
        $quantity = 0;
        $price = 0;
        foreach ($this->products as $pro) {
            $quantity += $pro['quantily'];
            $price += $pro['price'];
        }
        $this->totalQuanty = $quantity;
        $this->totaPrice = $price;
    }
}
