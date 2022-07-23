<?php
    if (isset($_SESSION['id'])) {
        $cartData = $cart->selectWishlist($_SESSION['id']);
    }
    if (isset($_POST['deleteWishlist'])) {
        if (isset($_SESSION['id'])) {
            $cart->deleteCart($_SESSION['id'], $_POST['item_id'], "wishlist");
        }
    }
    if (isset($_POST['cartBtn'])) {
        if (isset($_SESSION['id'])) {
            $cart->addToWishlist($_SESSION['id'], $_POST['item_id'], "wishlist", "cart");
        }
    }
?>

<div class="cart-table">
        <div class="container p-0">
            <div class="page-title text-center">
                <h3>Wishlist Table</h3>
            </div>
            <table class="border">
                <thead>
                    <tr>
                        <th class="p-img">image</th>
                        <th class="p-name">product name</th>
                        <th class="p-price">price</th>
                        <th class="d-product">
                            <i class="ti-close"></i>
                            <i class="fa fa-heart"></i>
                        </th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php if (isset($_SESSION['id'])) { ?>
                        <?php foreach ($cartData as $cart): ?>
                            <?php array_map(function($item){ ?>
                                <tr>
                                    <td class="cart-img"><img src="<?php echo $item['item_image'] ?? "images/Monki-Ruched-Sleeve-Side-Velvet-Dress.jpg"; ?>" alt="images/Monki-Ruched-Sleeve-Side-Velvet-Dress.jpg"></td>
                                    <td><h5><?php echo $item['item_name'] ?? "Unknown"; ?></h5></td>
                                    <td class="price"><?php echo $item['item_price'] ?? "0"; ?></td>
                                    <td>
                                        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                            <button type='submit' class='btn' name="deleteWishlist">
                                                <i class="ti-close"></i>
                                            </button>
                                        </form>
                                        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                            <button type='submit' class='btn' name="cartBtn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php },$product->getCartProduct($cart['item_id'])); ?>
                        <?php endforeach; ?>
                    <?php }else{
                        echo "<div class='bg-danger text-white p-2'>You have to loggedIn first before your cart products can be displayed!</div>";
                    } ?>
                </tbody>
            </table>
        </div>
    </div>