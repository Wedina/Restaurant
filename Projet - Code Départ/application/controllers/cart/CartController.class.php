<?php

// class CartController
// {
//     public function httpGetMethod(Http $http, array $queryFields)
//     {
       
    	


//     }

//     public function httpPostMethod(Http $http, array $formFields)
//     {
    	
// 		$productQT = $formFields['quantity'];


//     	$productId = $formFields['id'];

//     	$product = ProductModel::getProductById($productId);

//     	return ['_raw_template' => true, 'product' => $product, 'quantity' => $productQT];
    	
//     }
// }



class CartController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        
        $products = Cart::getProductsWithQuantity();

        return ['products' => $products, '_raw_template' => true];      
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
        
        $quantity = $formFields['quantity'];
        $productId = $formFields['id'];

        Cart::add($productId, $quantity);

        $products = Cart::getProductsWithQuantity();

        return ['products' => $products, '_raw_template' => true];
    }

}