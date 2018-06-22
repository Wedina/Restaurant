<?php

class UserSession {

	static function start() {
		session_start();
	}

	static function getUser() {
		 return UserModel::getUserById($_SESSION['user_id']);
	}

	static function getFirstname() {

		$user = UserSession::getUser();

		return $user['firstname'];
	}

	static function isConnected() {

		if (empty($_SESSION['user_id'])) {
			return false;
		} else {

			return true;
		}
	}

	static function connect($user) {
		$_SESSION['user_id'] = $user['id'];
	}

	static function logout() {
		session_destroy();
	}

}