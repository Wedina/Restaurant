<?php

       
class ProductModel {

	public function getAllProducts() {

		$db = new Database();

		$sql = "SELECT * FROM products";
		$products = $db->query($sql);

		return $products;
	}


	public static function getProductById($id) {

		$db = new Database();

		$sql = "SELECT * FROM products WHERE id = ?";

		$params = [$id];

		return $db->queryOne($sql, $params);
	}
	
}