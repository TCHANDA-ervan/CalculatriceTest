<?php
 //fonction de la table
//  require 'DBcon.php';
class information{

 
    private $pdo;

    function __construct() {
        $this->pdo  = new PDO('sqlite:C:\\Sqlite\\info');
    }
    function insert($id,$firstname,$lastname)
    {
        // $pdo=Database::connect();
        $sql = "INSERT INTO contact(id,name,lastname) values(?,?,?)";
        $q = $this->pdo->prepare($sql);
        $q->execute(array( $id,$firstname,$lastname));

        // Database::disconnect();  
    }

   
}
?>