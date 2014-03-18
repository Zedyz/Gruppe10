<?php 
class Users{
 	
	private $db;

	public function __construct($database) {
	    $this->db = $database;
	}	
	 

	public function user_exists($username) {
	
		$query = $this->db->prepare("SELECT COUNT(`id`) FROM `users` WHERE `username`= ?");
		$query->bindValue(1, $username);
	
		try{

			$query->execute();
			$rows = $query->fetchColumn();

			if($rows == 1){
				return true;
			}else{
				return false;
			}

		} catch (PDOException $e){
			die($e->getMessage());
		}

	}

	public function register($username, $password){
	    
		$password   = sha1($password);
	 
		$query 	= $this->db->prepare("INSERT INTO `users` (`username`, `password`) VALUES (?, ?) ");
	 
		$query->bindValue(1, $username);
		$query->bindValue(2, $password);
	 
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
/*	public function interesser($id, $gaming, $utvikling, $alkohol, $sosial){
	 
	 
		$query 	= $this->db->prepare("UPDATE users SET gaming = ?, utvikling = ?, utvikling = ?, utvikling = ?  WHERE ID = '$id'");
	 
		$query->bindValue(1, $gaming);
		$query->bindValue(2, $utvikling);
		$query->bindValue(3, $alkohol);
		$query->bindValue(4, $sosial);
	 
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}*/


	public function login($username, $password) {

		$query = $this->db->prepare("SELECT `password`, `id` FROM `users` WHERE `username` = ?");
		$query->bindValue(1, $username);
		
		try{
			
			$query->execute();
			$data 				= $query->fetch();
			$stored_password 	= $data['password'];
			$id   				= $data['id'];
			
			if($stored_password === sha1($password)){
				return $id;	
			}else{
				return false;	
			}

		}catch(PDOException $e){
			die($e->getMessage());
		}
	
	}

	public function userdata($id) {

		$query = $this->db->prepare("SELECT * FROM `users` WHERE `id`= ?");
		$query->bindValue(1, $id);

		try{

			$query->execute();

			return $query->fetch();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function getUsername($id)    {
	    
	    $query = $this->db->prepare("SELECT username FROM `users` WHERE `id`= ?");
		$query->bindValue(1, $id);
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		return $query->fetchAll();
	    
	    
	}
	  	  	 
	public function get_users() {

		$query = $this->db->prepare("SELECT * FROM `users` ORDER BY `time` DESC");
		
		try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}

		return $query->fetchAll();

	}
	
	public function meld($userid, $fakultet1, $fakultet2, $fakultet3, $fakultet4, $fakultet5, $utvalg1, $utvalg2, $utvalg3, $utvalg4, $utvalg5, $utvalg6, $utvalg7)  {
	    
	    
	    $query = $this->db->prepare("UPDATE users SET paameldt = '1', fakultet1 = '$fakultet1', fakultet2 = '$fakultet2', fakultet3 = '$fakultet3', fakultet4 = '$fakultet4', fakultet5 = '$fakultet5', utvalg1 = '$utvalg1', utvalg2 = '$utvalg2', utvalg3 = '$utvalg3', utvalg4 = '$utvalg4', utvalg5 = '$utvalg5', utvalg6 = '$utvalg6', utvalg7 = '$utvalg7' WHERE id = '$userid'");
	    
	    try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
}