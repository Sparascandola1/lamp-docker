<?php
require_once PROJECT_ROOT_PATH . "/Model/Database.php";
class ProductModel extends Database
{
    public function getProducts($limit)
    {
        return $this->select("SELECT * FROM products ORDER BY id ASC LIMIT ?", ["i", $limit]);
    }
}