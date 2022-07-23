<?php
    class Product{
        public $db = null;

        public function __construct(DB $db) {
            if (!isset($db->conn)) return null;
            $this->db = $db;
        }

        public function getProduct($table = "allproduct") {
            if ($this->db->conn != null) {
                $result = $this->db->conn->query("SELECT * FROM {$table}");
    
                $resultArray = array();
    
                // print out result
                while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                    $resultArray[] = $item;
                }
    
                return $resultArray;
            }
        }

        public function getCartProduct($itemid, $table = "allproduct") {
            if ($this->db->conn != null) {
                if (isset($itemid)) {
                    $result = $this->db->conn->query(sprintf("SELECT * FROM %s WHERE item_id=%s", $table, $itemid));
        
                    $resultArray = array();
        
                    // print out result
                    while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                        $resultArray[] = $item;
                    }
        
                    return $resultArray;
                }
            }
        }
    }