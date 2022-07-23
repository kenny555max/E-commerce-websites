<?php

    class UserInteraction{
        public $db = null;

        // dependency injection
        public function __construct(DB $db) {
            if ($db->conn === null) return null;
            $this->db = $db;
        }


        // check to see if user already exist in the database
        public function checkUserData($username = null ,$table = "user") {
            if ($this->db->conn != null) {
                if ($username != null) {
                    // build query
                    $sql = sprintf("SELECT * FROM %s WHERE username='%s'", $table, $username);
                    
                    $result = $this->db->conn->query($sql);

                    $row = null;

                    if ($result) {
                        $row = mysqli_num_rows($result);
                    }

                    return $row;
                }
            }
        }

        // insert user data into the database
        public function insertUserData($param = null, $table = "user") {
            // check to see if we actually have a connection
            if ($this->db->conn != null) {
                // the $param will be an array
                if ($param != null) {
                    // build query
                    $sql = "INSERT INTO {$table}";
                    // implode keys array
                    $sql .= "(`".implode("`,`", array_keys($param))."`)";
                    // implode values
                    $sql .= "VALUES('".implode("','", $param)."')";

                    $result = $this->db->conn->query($sql);

                    if ($result) {
                        header("Location:".$_SERVER['PHP_SELF']);
                    }

                    return $result;
                }
            }
        }


        public function newsletter($email = null, $table = "newsletter") {
            // check to see if we actually have a connection
            if ($this->db->conn != null) {
                if ($email != null) {
                    // build query
                    $sql = sprintf("INSERT INTO %s(email) VALUES(%s)", $table, $email);

                    $result = $this->db->conn->query($sql);

                    if ($result) {
                        header("Location:".$_SERVER['PHP_SELF']);
                    }

                    return $result;
                }
            }
        }

        // selectUser
        public function selectUser($user_id, $table = "user") {
            if ($this->db->conn != null) {
                if (isset($user_id)) {
                    $sql = sprintf("SELECT * FROM %s WHERE id=%s", $table, $user_id);

                    $result = $this->db->conn->query($sql);

                    $resultArray = array();

                    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $resultArray[] = $item['username'];
                    }

                    return $resultArray;
                }
            }
        }

        // login user
        public function loginUser($username = null, $password = null, $table = "user") {
            if ($this->db->conn != null) {
                if ($username != null && $password != null) {
                    // build query
                    $sql = sprintf("SELECT * FROM %s WHERE username='%s'", $table, $username);
                    $result = $this->db->conn->query($sql);

                    if ($result) {
                        $user = mysqli_num_rows($result);

                        if ($user > 0) {

                            $row = $result->fetch_assoc();
                            $dehash = $row['password'];
                            
                            $hash = password_verify($password, $dehash);
                        
                            if ($hash > 0) {
                                $sql = sprintf("SELECT * FROM %s WHERE username='%s' AND password='%s'", $table, $username, $dehash);
                                
                                $result = $this->db->conn->query($sql);
        
                                $row = mysqli_num_rows($result);
                                
                                if ($row) {
                                    if ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        $_SESSION['id'] = $item['id'];
                                        $_SESSION['username'] = $item['username'];
                                        $_SESSION['message'] = "LoggedIn Successfully!.";
                                        header("Location:".$_SERVER['PHP_SELF']);
                                    }
                                }else{
                                    echo "<div class='error bg-danger text-white p-2'>User data does not exist in the database!.</div>";
                                }
                            }else{
                                echo "<div class='error bg-danger text-white p-2'>The password you entered is incorrect!</div>";
                            }
                        }else{
                            echo "<div class='error bg-danger text-white p-2'>User data does not exist in the database!. Register here <a href='register.php'>SIGNUP</a></div>";
                        }
                    }else{
                        echo "<div class='error bg-danger text-white p-2'>The username or password you entered is incorrect!. Register here <a href='register.php'>SIGNUP</a></div>";
                    }
                }
            }
        }
    }