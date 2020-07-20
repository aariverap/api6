<?php
class Database{
    
    private $db_host = 'b9rioutmpkx3weafx1ed-mysql.services.clever-cloud.com';
    private $db_name = 'b9rioutmpkx3weafx1ed';
    private $db_username = 'u0h3wjqqojs8o09h';
    private $db_password = 'BysNFpYZT9vQ7DCm6b6j';    
    
    public function dbConnection(){
        try{
            $conn = new PDO('mysql:host='.$this->db_host.';dbname='.$this->db_name,$this->db_username,$this->db_password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection error ".$e->getMessage(); 
            exit;
        }
    }
}
?>