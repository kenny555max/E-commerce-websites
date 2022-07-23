<?php
    // heare we are trying to select products from the datbase where id= to the id we received from ajax call
    include "../controller/db.class.php";
    include "../classes/product.class.php";

    // connection
    $db = new DB();

    // products
    $product = new Product($db);
    if (isset($_POST['itemid'])) {
        $result = $product->getCartProduct($_POST['itemid']);
        echo json_encode($result);
    }