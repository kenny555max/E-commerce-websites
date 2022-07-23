<?php

    class Cart{
        public $db = null;

        public function __construct(DB $db) {
            if ($db->conn == null) return null;
            $this->db = $db;
        }

        public function insertData($param = null, $table = "cart") {
            if ($this->db->conn != null) {
                if ($param != null) {
                    // implode is ued to return a string from an array // or join an array to a string
                    $columns = implode(",", array_keys($param));
                    // print_r($columns);
                    $values = implode(",", array_values($param));
                    // print_r($values);
                    $query = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                    $result = $this->db->conn->query($query);
    
                    return $result;
                }else{
                    echo "no parameters";
                }
            }
        }

        public function insertIntoCart($userid = null, $itemid = null) {
            if ($userid != null && $itemid != null) {
                $param = array(
                    "user_id" => $userid,
                    "item_id" => $itemid
                );

                $result = $this->insertData($param);

                if ($result) {
                    header("Location:". $_SERVER['PHP_SELF']);
                }
            }else{
                echo "<div class='bg-danger text-white p-2'>We do not have your info in our database!. You have to be loggedIn to add product to the cart!.</div>";
            }
        }

        public function selectCart($user_id, $table = "cart") {
            if ($this->db->conn != null) {
                if (isset($user_id)) {
                    $sql = sprintf("SELECT * FROM %s WHERE user_id=%s", $table, $user_id);
    
                    $result = $this->db->conn->query($sql);
    
                    $resultArray = array();
                    
                    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $resultArray[] = $item;
                    }
    
                    return $resultArray;
                }
            }
        }

        public function checkCart($table = "cart") {
            if ($this->db->conn != null) {
                $sql = sprintf("SELECT * FROM %s", $table);

                $result = $this->db->conn->query($sql);

                $resultArray = array();
                
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $resultArray[] = $item;
                }

                return $resultArray;
            }
        }

        public function selectWishlist($user_id, $table = "wishlist") {
            if ($this->db->conn != null) {
                if (isset($user_id)) {
                    $sql = sprintf("SELECT * FROM %s WHERE user_id=%s", $table, $user_id);
    
                    $result = $this->db->conn->query($sql);
    
                    $resultArray = array();
                    
                    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $resultArray[] = $item;
                    }
    
                    return $resultArray;
                }
            }
        }

        public function deleteCart($user_id, $item_id, $table = "cart") {
            if ($this->db->conn != null) {
                if (isset($user_id) && isset($item_id)) {
                    $sql = sprintf("DELETE FROM %s WHERE user_id=%s AND item_id=%s", $table, $user_id, $item_id);

                    $result = $this->db->conn->query($sql);

                    if ($result) {
                        header("Location:".$_SERVER['PHP_SELF']);
                    }
                }
            }
        }

        public function addToWishlist($user_id, $item_id, $fromTable = "cart", $saveTable = "wishlist") {
            if ($this->db->conn != null) {
                if (isset($user_id) && isset($item_id)) {
                    $sql = sprintf("INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE user_id=%s AND item_id=%s;", $user_id, $item_id);
                    $sql .= sprintf("DELETE FROM {$fromTable} WHERE user_id=%s AND item_id=%s", $user_id, $item_id);

                    $result = $this->db->conn->multi_query($sql);

                    if ($result) {
                        header("Location:".$_SERVER['PHP_SELF']);
                    }
                }
            }
        }

        
        public function getCartId($cartArray, $key = "item_id") {
            if ($cartArray != null) {
                $cartId = array_map(function($value) use($key){
                    return $value[$key];
                }, $cartArray);
                return $cartId;
            }
        }


        public function sumTotal($array) {
            if (isset($array)) {
                $sum = 0;
                foreach ($array as $item) {
                    $sum += floatval($item[0]);
                }
                return sprintf("%.2f", $sum);
            }
        }
    }