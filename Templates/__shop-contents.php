<?php
    if (isset($_GET['user_id'])) {
        $_SESSION['id'] = $_GET['user_id'];
    }
    
    $data = $product->getProduct();
    shuffle($data);
    if (isset($_POST['shop-cart'])) {
        $cart->insertIntoCart($_POST['user_id'], $_POST['item_id']);
    }
?>

<div class="shop-contents">
    <div class="col-lg-12">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-3 p-0">
                    <div class="left-content">
                        <div class="categories">
                            <h3>Categories</h3>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="#">Men</a>
                                </li>
                                <li>
                                    <a href="#">Women</a>
                                </li>
                                <li>
                                    <a href="#">Kids</a>
                                </li>
                            </ul>
                        </div>
                        <div class="brand">
                            <h3>Brand</h3>
                            <div class="brands pl-4">
                                <label for="gown">
                                    Gown
                                    <input type="checkbox" id="gown">
                                    <span id="checkmark"></span>
                                </label>
                                <label for="t-shirt">
                                    T-shirt
                                    <input type="checkbox" id="t-shirt">
                                    <span id="checkmark"></span>
                                </label>
                                <label for="shoe">
                                    Shoe
                                    <input type="checkbox" id="shoe">
                                    <span id="checkmark"></span>
                                </label>
                                <label for="shirt">
                                    Shirt
                                    <input type="checkbox" id="shirt">
                                    <span id="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="color">
                            <h3>Color</h3>
                            <ul>
                                <li class="yellow">Yellow</li>
                                <li class="green">Green</li>
                                <li class="red">Red</li>
                                <li class="black">Black</li>
                                <li class="purple">Purple</li>
                                <li class="blue">Blue</li>
                            </ul>
                        </div>
                        <div class="size">
                            <h3>Size</h3>
                            <label for="s-size">
                                <input type="checkbox" id="s-size">
                                <span class="checkmark-size">S</span>
                            </label>
                            <label for="m-size">
                                <input type="checkbox" id="m-size">
                                <span class="checkmark-size">M</span>
                            </label>
                            <label for="l-size">
                                <input type="checkbox" id="l-size">
                                <span class="checkmark-size">L</span>
                            </label>
                            <label for="xs-size">
                                <input type="checkbox" id="xs-size">
                                <span class="checkmark-size">XS</span>
                            </label>
                        </div>
                        <div class="tags">
                            <h3>Tags</h3>
                            <ul class="tag-list p-0 list-unstyled">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Gown</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Shoes</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">T-shirt</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Cap</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Hood</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Dresses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">Trousers</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="cart">
                    <?php foreach ($data as $item): ?>
                        <div class="cart-items">
                            <div class="cart-img set-bg" data-setbg="<?php echo $item['item_image'] ?? "images/gown/portrait/blue/blue2.jpg" ?>">
                                <div class="view">
                                    <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
                                        <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : null ?>">
                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1" ?>">
                                        <?php
                                            if (isset($_SESSION['id'])) {
                                                if (in_array($item['item_id'], $cart->getCartId($cart->selectCart($_SESSION['id'])) ?? [] )) {
                                                    echo '<button type="submit" name="shop-cart" disabled class="btn bg-success d-flex justify-content-center h-100 mr-1 rounded-0"><i class="fa fa-shopping-bag"></i></button>';
                                                }else{
                                                    echo '<button type="submit" name="shop-cart" class="btn bg-warning d-flex justify-content-center h-100 mr-1 rounded-0"><i class="fa fa-shopping-bag"></i></button>';
                                                }
                                            }else{
                                                echo '<button type="submit" name="shop-cart" class="btn bg-warning d-flex justify-content-center h-100 mr-1 rounded-0"><i class="fa fa-shopping-bag"></i></button>';
                                            }
                                        ?>
                                    </form>
                                    <p>
                                        <i class="fa fa-plus"></i>
                                        <span>Quick view</span>
                                    </p>
                                    <i class="fa fa-street-view"></i>
                                </div>
                            </div>

                            <div class="cart-img-text">
                                <span class="item_brand"><?php echo $item['item_brand'] ?></span>
                                <h4 class="item_name"><?php echo $item['item_name'] ?></h4>
                                <h4 class="item_price"><?php echo $item['item_price'] ?> <span><del>price</del></span></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                </div>              
            </div>
        </div>
    </div>
</div>