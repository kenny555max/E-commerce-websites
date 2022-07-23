<?php
    if (isset($_SESSION['id'])) {
        $cartData = $cart->selectCart($_SESSION['id']);
    }
    if (isset($_POST['deleteCart'])) {
        if (isset($_SESSION['id'])) {
            $cart->deleteCart($_SESSION['id'], $_POST['item_id']);
        }
    }
    if (isset($_POST['wishlistBtn'])) {
        if (isset($_SESSION['id'])) {
            $cart->addToWishlist($_SESSION['id'], $_POST['item_id']);
        }
    }
?>

    <div class="cart-table">
        <div class="container p-0">
            <table class="border">
                <div class="page-title text-center">
                    <h3>Cart Table</h3>
                </div>
                <thead>
                    <tr>
                        <th class="p-img">image</th>
                        <th class="p-name">product name</th>
                        <th class="p-price">price</th>
                        <th class="p-qty">Quantity</th>
                        <th class="t-price">total</th>
                        <th class="d-product">
                            <i class="ti-close"></i>
                            <i class="fa fa-heart"></i>
                        </th>
                    </tr>
                </thead>
    
                <tbody>
                    <?php if (isset($_SESSION['id'])) { ?>
                        <?php foreach ($cartData as $cartItem): ?>
                            <?php $subtotal[] = array_map(function($item){ ?>
                                <tr>
                                    <td class="cart-img"><img src="<?php echo $item['item_image'] ?? "images/Monki-Ruched-Sleeve-Side-Velvet-Dress.jpg"; ?>" alt="images/Monki-Ruched-Sleeve-Side-Velvet-Dress.jpg"></td>
                                    <td><h5><?php echo $item['item_name'] ?? "Unknown"; ?></h5></td>
                                    <td class="price"><?php echo $item['item_price'] ?? "0"; ?></td>
                                    <td>
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <span data-id="<?php echo $item['item_id'] ?>" class="dec qtybtn">-</span>
                                                <input class="input" data-id="<?php echo $item['item_id'] ?>" type="text" value="1">
                                                <span data-id="<?php echo $item['item_id'] ?>" class="inc qtybtn">+</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-id="<?php echo $item['item_id'] ?>" class="price"><?php echo $item['item_price'] ?? "0" ?></td>
                                    <td>
                                        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                            <button type='submit' class='btn' name="deleteCart">
                                                <i class="ti-close"></i>
                                            </button>
                                        </form>
                                        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
                                            <input type="hidden" value="<?php echo $item['item_id'] ?>" name="item_id">
                                            <button type='submit' class='btn' name="wishlistBtn">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php return $item['item_price']; ?>
                            <?php },$product->getCartProduct($cartItem['item_id'])); ?>
                        <?php endforeach; ?>
                    <?php }else{
                        echo "<div class='bg-danger text-white p-2'>You have to loggedIn first before your cart products can be displayed!</div>";
                    } ?>
                </tbody>
            </table>


            <div class="col-lg-12 p-0">
                <div class="cart-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cart-update">
                                <div class="updates">
                                    <a class="cont" href="shop.php">
                                        continue shopping
                                    </a>
                                    <a class="update" href="shop.php">
                                        update cart
                                    </a>
                                </div>
                                <div class="discount">
                                    <h4>Discount codes</h4>
                                    <p>Enter a coupon code to get 5% discount</p>
                                    <p class="text-danger coupon-error" style="display:none">Incorrect coupon codes</p>
                                    <form method="POST" class="discountForm" action="<?php $_SERVER['PHP_SELF'] ?>">
                                        <div class="form-row border col-lg-8">
                                            <div class="col-lg-9">
                                                <div class="form-group">
                                                    <input type="text" class="form-control discountInput" placeholder="Enter your codes">
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="form-row">
                                                    <button type="submit" name="discountBtn" class="btn discountBtn">apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="cart-total">
                                <div class="subtotal d-flex">
                                    <p>Subtotal(<span><?php echo isset($subtotal) ? count($subtotal) : "0" ?></span> items)</p>
                                    <p>$<span class="deal_price"><?php echo isset($subtotal) ? $cart->sumTotal($subtotal) : "0" ?></span></p>
                                </div>
                                <div class="total d-flex">
                                    <p>total</p>
                                    <p class="text-warning">$<span class="total_price"><?php echo isset($subtotal) ? $cart->sumTotal($subtotal) : "0" ?></span></p>
                                </div>
                                <a href="#" class="btn btn-lg">proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>