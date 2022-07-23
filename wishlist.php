<?php
    include 'Templates/__header.php';
    if (isset($_SESSION['id'])) {
        if (count($cart->selectWishlist($_SESSION['id'])) > 0) {
            include 'Templates/__wishlist.php';
        }else{
            include 'Templates/includes/__emptyWishlist.php';
        }
    }else{
        include 'Templates/includes/__emptyWishlist.php';
    }
    include 'Templates/__footer.php';
?>