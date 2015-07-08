<?php
class DB{
	private $USER = 'mizoe';
	private $PW = 'May.2015';
	private $dnsinfo = "mysql:dbname=i500;host=sv1;charset=utf8";

	private function ConnectDB(){
		try{
			$pdo = new PDO($this->dnsinfo, $this->USER, $this->PW);
			return $pdo;
		}catch(Exeption $e){
			return false;
		}
	}
	
	public function executeSQL($sql, $array){
		try{
			if(!$pdo = $this->ConnectDB() ){
				return false;
			}
			$stmt = $pdo->prepare($sql);
			$stmt->execute($array); 
			return $stmt;
		}catch(Exeption $e){
			return false;
		}
	}
}
?>