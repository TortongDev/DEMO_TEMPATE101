<?php
	require "../../conf/connection.php";
	class registers extends db {
		public $username;
		public $password;
		public $age;
		public $status;
		
		public function __construct($username='',$password='',$age='',$status=1){
			$this->username = $username;
			$this->password = $password;
			$this->age		= $age;
			$this->status	= $status;
		}
		
		public function setUsername($username){
			$this->username = $username;
		}
		public function getUsername(){
			return $this->username;
		}
		
		public function setPassword($password){
			$this->password = $password;
		}
		public function getPassword(){
			return $this->password;
		}
		
		public function setAge($age){
			$this->age = $age;
		}
		public function getAge(){
			return $this->age;
		}		
		public function setStatus($status){
			$this->status = $status;
		}
		public function getStatus(){
			return $this->status;
		
		
		
		
		// used function
		public function save(){
			db::insertt("insert into usernameTest (username,password,age,status) values (?,?,?,?)",array($this->username,$this->password,$this->age,$this->status));
		}
		public $id;
		public function updates($id){
			$this->id = $id;
			db::updatee("update usernameTest set status = ? where id =? ",array($this->status,$this->id));
		}
		public function deletes($id){
			$this->id = $id;
			db::deletee("delete from usernameTest  where id = ? ",array($this->id));
		}
	}

?>