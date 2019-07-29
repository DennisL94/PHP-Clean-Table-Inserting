<?php
//database.php
class Databases{

		 public $con;
		 public $error;
		 public function __construct()
		 {
					$this->con = mysqli_connect("localhost", "root", "", "DeveloperBump");
					if(!$this->con) {
							 echo 'Database Connection Error ' . mysqli_connect_error($this->con);
					} else {
						session_start();
		 session_regenerate_id(true);
		 ini_set( 'session.cookie_httponly', 1 );
					}

		 }
		 public function insertQueryArray($table_name, $data)  {
					$string = "INSERT INTO ".$table_name." (";
					$string .= implode(",", array_keys($data)) . ') VALUES (';
					$string .= "'" . implode("','", array_values($data)) . "')";
					return mysqli_query($this->con, $string) ? true : mysqli_error($this->con);
		 }

		 public function insertRow($rowDefinition) {
				 	return mysqli_real_escape_string($this->con, $_POST[$rowDefinition]);
		 }

}
?>
