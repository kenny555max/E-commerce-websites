<?php
    if (isset($_GET['user_id'])) {
        $_SESSION['user_id'] = $_GET['user_id'];
        echo $_SESSION['user_id'];
    }
    $data = $product->getProduct("shoe");
    shuffle($data);
    if (isset($_POST['shoe-cart'])) {
        $cart->insertIntoCart($_POST['user_id'], $_POST['item_id']);
    }
?>

        <div class="collection shoe">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 p-0">
                            <div class="large-image set-bg" data-setbg="images/shoes/portrait/black/black3.jpg">
                                <h3>Shoe</h3>
                                <a href="#">Discover More</a>
                            </div>
                        </div>
                        <div class="col-lg-8 offset-lg-1">
                            <div class="small-image pt-4 pb-4">
                                <ul class="pb-4">
                                    <li class="active">Blue Gown</li>
                                    <li>Red Gown</li>
                                    <li>Pitch Gown</li>
                                    <li>Black Gown</li>
                                </ul>

                                <div class="slide-images owl-carousel">
                                    <?php foreach ($data as $item): ?>
                                        <div class="slide">
                                            <div class="slide-img set-bg" data-setbg="<?php echo $item['item_image'] ?? "shoe pictures"?>">
                                                <div class="view">
                                                <form method="post">
                                                <input type="hidden" name="user_id" value="<?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null ?>">
                                                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? "1" ?>">
                                                        <?php
                                                            if (isset($_SESSION['id'])) {
                                                                if (in_array($item['item_id'], $cart->getCartId($cart->selectCart($_SESSION['id'])) ?? [] )) {
                                                                    echo '<button type="submit" name="shoe-cart" disabled class="btn bg-success d-flex justify-content-center h-100 mr-1 rounded-0"><i class="fa fa-shopping-bag"></i></button>';
                                                                }else{
                                                                    echo '<button type="submit" name="shoe-cart" class="btn bg-warning d-flex justify-content-center h-100 mr-1 rounded-0"><i class="fa fa-shopping-bag"></i></button>';
                                                                }
                                                            }else{
                                                                echo '<button type="submit" name="shoe-cart" class="btn bg-warning d-flex justify-content-center h-100 mr-1 rounded-0"><i class="fa fa-shopping-bag"></i></button>';
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

                                            <div class="slide-img-text">
                                                <span class="item_brand"><?php echo $item['item_brand'] ?? "Unknown" ?></span>
                                                <h4 class="item_name"><?php echo $item['item_name'] ?? "Unknown" ?></h4>
                                                <h4 class="item_price"><?php echo $item['item_price'] ?? "0" ?><span><del>price</del></span></h4>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>