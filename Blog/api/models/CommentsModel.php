<?php

    require_once "DB.php";
    
    class CommentsModel extends DB {
        
        function insertItem($item) {
            $sql = 'INSERT INTO comments (comments) value (?)';
            
            $stmt=$this->dbh->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }    