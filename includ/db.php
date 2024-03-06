<?php 

class DB{
   public $servername = "localhost";
   public $userName ='root';
   public $password ='';
   public $dbname = 'tama_shop';

   public $conn = '';



   public function __construct()
   {
   $this->conn = mysqli_connect($this->servername, $this->userName ,$this->password ,$this->dbname);

    if(  $this->conn->connect_error){
        die("Connection failed: " .  $this->conn->connect_error);
    }
       
   } 
}

?>
