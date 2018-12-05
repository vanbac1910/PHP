<?php

class Cart
{
    const PRICE_BUTTER = 1.00;
    const PRICE_MILK = 3.00;
    const PRICE_EGGS = 6.95;

    protected $products = array();

    public function add($product, $quantity)
    {
        $this->products[$product] = $quantity;
    }

    public function getQuantity($product)
    {
        return isset($this->products[$product]) ? $this->products[$product] :
            FALSE;
    }

    public function getTotal($tax)
    {
        $total = 0.00;

        $callback =
            function ($quantity, $product) use ($tax, &$total) {
                $pricePerItem = constant(__CLASS__ . "::PRICE_" .
                    strtoupper($product));
                $total += ($pricePerItem * $quantity) * ($tax + 1.0);
            };

        array_walk($this->products, $callback);
        return round($total, 2);
    }
}

        $my_cart = new Cart;

        // Thêm sản phẩm
        $my_cart->add('butter', 1);
        $my_cart->add('milk', 3);
        $my_cart->add('eggs', 6);

        // In ra tổng số tiền khi đã sale 5%.
        print $my_cart->getTotal(0.05) . "\n";
