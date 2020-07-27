<?php
require_once 'inc/config.php';

if(isset($_GET['add-to-cart']) && !empty($_GET['add-to-cart'])){
   $id = $_GET['add-to-cart'];
    $getProduct = mysqli_query($connection, "SELECT * FROM products WHERE id = '$id'");
    $product = mysqli_fetch_array($getProduct);

    if(isset($_SESSION['cart_'. $product['id']])){

        $cart = $_SESSION['cart_'.$product['id']];

        $_SESSION['cart_'.$product['id']] = [
            'id' => $product['id'],
            'name' => $cart['name'],
            'quantity' => $cart['quantity'] + 1,
            'price' => $cart['price'] + $product['price']

        ];

    }else{
        $_SESSION['cart_'. $product['id']] = [
            'id' => $product['id'],
            'name' => $product['title'],
            'quantity' => 1,
            'price' => $product['price']
    
        ];
    }


    header('Location: cart.php');

}elseif(isset($_GET['remove-cart']) && !empty($_GET['remove-cart'])){
    unset($_SESSION['cart_'. $_GET['remove-cart']]);
    header('Location: cart.php');
}elseif(isset($_GET['minus']) && !empty($_GET['minus'])){
   $cart = $_SESSION['cart_'. $_GET['minus']];
   $id = $_GET['minus'];
   $getProduct = mysqli_query($connection, "SELECT * FROM products WHERE id = '$id'");
   $product = mysqli_fetch_array($getProduct);

   if($cart['quantity'] > 1){
    $_SESSION['cart_'. $_GET['minus']] = [
        'id' => $cart['id'],
        'name' => $cart['name'],
        'quantity' => $cart['quantity'] - 1,
        'price' => $product['price'] * ($cart['quantity'] -1)

    ];


   }else{
       unset($_SESSION['cart_'. $_GET['minus']]);
   }

   header('Location: cart.php');
}