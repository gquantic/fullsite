<?
	class Db{
		private $dbData = [
			"host" => "localhost",
			"user" => "root",
			"password" => "",
			"name" => "guezzy"	
		];

		public function link(){
			return mysqli_connect($this->dbData["host"], $this->dbData["user"], $this->dbData["password"], $this->dbData["name"]);
		}

		public function q($query){
			return mysqli_query($this->link(), $query);
		}
	}