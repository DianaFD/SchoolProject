<?php

require_once "DB.php";

class Articles extends DB {
    function getAll() {
        $sql = 'select * from articles';
        
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute();
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
