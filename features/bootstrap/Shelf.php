<?php

/**
 * Created by PhpStorm.
 * User: Hata
 * Date: 2016/10/29
 * Time: 12:48
 */
final class Shelf
{
    private $priceMap = [];

    public function __construct()
    {

    }

    public function setProductPrice($product, $price)
    {
        $this->priceMap[$product] = $price;
    }

    public function getProductPrice($product)
    {
        return $this->priceMap[$product];
    }
}