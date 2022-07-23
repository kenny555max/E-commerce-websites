<?php
    include 'Templates/__header.php';
    if (isset($_SESSION['id'])) {
        if (count($cart->selectCart($_SESSION['id'])) > 0) {
            include 'Templates/__shopping-cart.php';
        }else{
            include 'Templates/includes/__emptyCart.php';
        }
    }else{
        include 'Templates/includes/__emptyCart.php';
    }
    include 'Templates/__footer.php';
?>