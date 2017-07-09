<?php

/**
 * Created by PhpStorm.
 * User: Hata
 * Date: 2016/10/29
 * Time: 12:48
 */
final class Basket implements \Countable
{
    private $shelf;
    private $products;

    public function __construct(Shelf $shelf)
    {
        $this->shelf = $shelf;
    }
    
    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    public function getTotalPrice()
    {
        $totalPrice = 0.0;
        foreach ($this->products as $product) {
            $totalPrice += $this->shelf->getProductPrice($product);
        }
        
        $vat = 0.2 * $totalPrice;
        
        $deliveryCost = ($totalPrice > 10.0) ? 2.0 : 3.0;

        return $totalPrice + $vat + $deliveryCost;
    }

    public function count()
    {
        return count($this->products);
    }

    

}