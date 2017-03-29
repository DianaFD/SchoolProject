<?php

require_once "DB.php";

class Comments extends DB {
    function getAll() {
        $sql = 'select * from comments';
        
        $stmt = $this->dbh->prepare($sql);
        $stmt -> execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
        
    } 
    
}