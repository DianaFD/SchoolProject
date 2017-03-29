<?php
    require_once( __DIR__ . '/../db.php');
    
    function save_user($email, $pass) {
        global $dbh;
        
        $sql = 'insert into users (email, password) values(?, ?)';
        
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array($email, $pass));
        
        return $stmt->rowCount();
    }
    
    function get_user_by_email($email) {
        global $dbh;
        
        $sql = 'select * from users where email = ?';
        
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array($email));
        
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    
    