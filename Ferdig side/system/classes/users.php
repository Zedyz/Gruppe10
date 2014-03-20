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

	public function register($username, $password, $epost){
	    
		$password   = sha1($password);
	 
		$query 	= $this->db->prepare("INSERT INTO `users` (`username`, `password`, `epost`) VALUES (?, ?, ?) ");
	 
		$query->bindValue(1, $username);
		$query->bindValue(2, $password);
		$query->bindValue(3, $epost);
	 
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	


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
	
	public function getUtvalg($id) {

		$query = $this->db->prepare("SELECT * FROM `users` WHERE `id`= ?");
		$query->bindValue(1, $id);

		try{

			$query->execute();

			return $query->fetch(PDO::FETCH_ASSOC);

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function getEpost($id)   {
	    $query =  $this->db>prepare("SELECT epost FROM `users` where id = ?");
	    $query->bindValue(1, $id);
	    
	    try{
	        $query->execute();
	        return $query->fetch(PDO::FETCH_ASSOC);
	        
	    }   catch(PDOException $e)  {
	        
	        die($e->getMessage());
	    }
	    
	    
	    
	}
	
	public function getUsername($id)    {
	    
	    $query = $this->db->prepare("SELECT username FROM `users` WHERE `id` = ?");
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
	
	public function meld($userid, $fakultet1, $fakultet2, $fakultet3, $fakultet4, $fakultet5, $westerbar, $lol, $pus, $pum, $utv, $ufsg, $sos, $kit, $aug, $wtvg, $idrettsutvalget, $tom, $mat, $bok, $mus, $wbde)  {
	    
	    
	    $query = $this->db->prepare("UPDATE users SET paameldt = '1', fakultet1 = '$fakultet1', fakultet2 = '$fakultet2', fakultet3 = '$fakultet3', fakultet4 = '$fakultet4', fakultet5 = '$fakultet5', westerbar = '$westerbar', lol = '$lol', pus = '$pus', pum = '$pum', utv = '$utv', ufsg = '$ufsg', sos = '$sos', kit = '$kit', aug = '$aug', wtvg = '$wtvg', iuv = '$idrettsutvalget', tom = '$tom', mat = '$mat', bok = '$bok', mus = '$mus', wbde = '$wbde' WHERE id = '$userid'");
	    
	    try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function meldut($id, $utvalgnavn)  {
	    
	    
	    $query = $this->db->prepare("UPDATE users SET $utvalgnavn = '0' WHERE id = '$id'");
	    
	    try{
			$query->execute();
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function opprettAktivitet($brukerid, $aktivitetnavn, $utvalgnavn, $dato, $sted, $beskrivelse){
	    
	 
		$query 	= $this->db->prepare("INSERT INTO `aktiviteter` (`brukerID`, `aktivitetnavn`, `utvalgnavn`, `dato`, `sted`, `beskrivelse`) VALUES (?, ?, ?, ?, ?, ?) ");
	 
		$query->bindValue(1, $brukerid);
		$query->bindValue(2, $aktivitetnavn);
		$query->bindValue(3, $utvalgnavn);
		$query->bindValue(4, $dato);
		$query->bindValue(5, $sted);
		$query->bindValue(6, $beskrivelse);
	 
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}	
	}
	
	public function getAktivitet() {

		$query = $this->db->prepare("SELECT * FROM `aktiviteter`");

		try{

			$query->execute();

			return $query->fetchAll();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function meldAktivitet($brukerid, $aktivId)  {
	    
	    $query 	= $this->db->prepare("INSERT INTO `brukerAktivitet` (`brukerID`, `AktivitetID`) VALUES (?, ?) ");
	 
		$query->bindValue(1, $brukerid);
		$query->bindValue(2, $aktivId);
		
		try{
			$query->execute();
			
		}catch(PDOException $e){
			die($e->getMessage());
		}
	    
	}
	
	public function getAktivitetBruker($id) {

		$query = $this->db->prepare("SELECT aktivitetID FROM `brukerAktivitet` WHERE brukerID = '$id'");

		try{

			$query->execute();

			return $query->fetchAll();

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	public function getAktivitetNavn($id) {

		$query = $this->db->prepare("SELECT aktivitetnavn FROM aktiviteter RIGHT JOIN brukerAktivitet ON aktiviteter.AktivitetID = brukerAktivitet.AktivitetID WHERE brukerAktivitet.brukerID = '$id'");

		try{

			$query->execute();

			return $query->fetchAll(PDO::FETCH_ASSOC);

		} catch(PDOException $e){

			die($e->getMessage());
		}

	}
	
	
}