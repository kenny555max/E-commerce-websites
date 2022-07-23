
    <?php if (isset($_SESSION['id'])): ?>
        <div class="bg-info text-white p-2">
            <?php echo $_SESSION['message']; ?>
        </div>
    <?php endif; ?>
    <div class="login col-lg-4 col-md-6 col-sm-6 border p-4 mt-4 mb-4 offset-lg-4 offset-md-3 offset-sm-3">
        <form action="<?php $_SERVER["PHP_SELF"] ?>" method="POST">
            <h2 class="text-center p-2">Login</h2>

            <ul class="list-unstyled">
                <?php foreach ($error as $errors): ?>
                    <li class="bg-danger p-2 mb-2 text-white"><?php echo $errors; ?></li>
                <?php endforeach; ?>
            </ul>
                    
            <?php
                if (!isset($_SESSION['id'])) {
                    echo '<div class="form-row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="name">Username or email address*</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="password">Password*</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>
                        <button type="submit" class="btn w-100 btn-lg btn-warning font-weight-bold text-white" name="loginBtn">LOGIN</button>
                    </div>';
                }else{
                    echo '<button type="submit" name="logoutBtn" class="btn btn-lg w-100 text-white btn-warning">LOGOUT</button>';
                }
            ?>
        </form>
    </div>