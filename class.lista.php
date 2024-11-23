<?php

class Product 
{
    public $products;

    public function addProduct($name, $description, $price){
        array_push($products, 'nome' => $name ,'descricao' => $description, 'pagou' => $price);
    }

    public function showProducts(){
        echo "<pre>";
        var_dump($this->products);
        echo "</pre>";
    }
}

