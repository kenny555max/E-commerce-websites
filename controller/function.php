<?php
    include "db.class.php";
    include "__autoload.php";

    $username = "";
    $error = array();
    
    // connection
    $db = new DB();

    // products
    $product = new Product($db);

    // cart
    $cart = new Cart($db);

    // userInteraction
    $user = new UserInteraction($db);


    if (isset($_POST['registerBtn'])) {
        $username = mysqli_real_escape_string($db->conn, $_POST['username']);
        $password = mysqli_real_escape_string($db->conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($db->conn, $_POST['cpassword']);

        if (empty($username)) {
            $error['username'] = "Username is required!";
        }
        if (empty($password)) {
            $error['password'] = "Password is required!";
        }
        if ($password != $cpassword) {
            $error['password'] = "The two pasword must match!";
        }

        if (count($error) === 0) {

            if ($user->checkUserData($username) === 1) {
                $error["user"] = "User already exist in our database!";
            }else{
                if (isset($username) && isset($password)) {
                    $password = password_hash($password, PASSWORD_BCRYPT);
                    $param = array(
                        "username" => $username,
                        "password" => $password
                    );
    
                    $user->insertUserData($param);
                }
            }
        }
    }


    if (isset($_POST['loginBtn'])) {
        $username = mysqli_real_escape_string($db->conn, $_POST['username']);
        $password = mysqli_real_escape_string($db->conn, $_POST['password']);

        if (empty($username)) {
            $error['username'] = "Username required!";
        }
        if (empty($password)) {
            $error['password'] = "Password required!";
        }

        if (count($error) === 0) {
            $user->loginUser($username, $password);
        }
    }



    if (isset($_POST['logoutBtn'])) {
        session_unset();
        header("Location:".$_SERVER['PHP_SELF']);
    }