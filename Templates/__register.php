
    <div class="register col-lg-4 col-md-6 col-sm-6 border p-4 mt-4 mb-4 offset-lg-4 offset-md-3 offset-sm-3">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <h2 class="text-center p-2">Register</h2>

            <ul class="p-0 list-unstyled">
                <?php if (count($error) > 0): ?>
                    <?php foreach ($error as $errors): ?>
                        <li class="text-white p-2 bg-danger"><?php echo $errors; ?></li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
    
            <div class="form-row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="name">Username or email address*</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="Confirm Password">Confirm Password*</label>
                        <input type="password" name="cpassword" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn w-100 btn-lg btn-warning font-weight-bold text-white" name="registerBtn">REGISTER</button>
            </div>
        </form>
    </div>