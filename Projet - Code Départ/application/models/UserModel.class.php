<?php

class UserModel
{

	public static function getUserEmail($email)
	{
		$db = new Database();
		$sql = "SELECT * FROM users WHERE email = ?";
		$params = [$email];
		return $db->queryOne($sql,$params);
	}

	public static function getUserById($id)
	{
		$db = new Database();
		$sql = "SELECT * FROM users WHERE id = ?";
		$params = [$id];
		return $db->queryOne($sql, $params);
	}


	// public function getUserBypasswordAndEmail($password, $email) {

	// 	$db = new Database();
	// 	$sql = 'SELECT * FROM users WHERE email LIKE "$email" AND password LIKE "$password"';
	// 	$infoUser = $db->queryOne($sql, array($password, $email));


	// 	public function getUserId($id)
	// 	{
	// 		$sql = 'SELECT * FROM users WHERE "id" = "?" ';
	// 		$userId = $db->queryOne($sql,$id);
	// 	}
		

	// }


	public function insert($dataUser){

		$db = new Database();

		$sql = 'INSERT INTO users
		(
		lastname, 
		firstname, 
		email, 
		password, 
		birthdate, 
		address, 
		city, 
		zipcode, 
		phone,
		created_at,
		updated_at
		)

		VALUES (
		:lastname, 
		:firstname, 
		:email, 
		:password, 
		:birthdate, 
		:address, 
		:city, 
		:zipcode, 
		:phone,
		NOW(),
		NOW())';

		$db->executeSql($sql,$dataUser);

		$flashBag = new FlashBag();
        $flashBag->add('Votre compte utilisateur a bien été créé.');
		


	}


	
}


