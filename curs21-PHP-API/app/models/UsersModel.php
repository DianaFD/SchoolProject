<?php
require_once "DB.php";

class UsersModel extends DB {
    function checkUser($email, $pass) {
        $sql = 'select  first_name, last_name, email from users where email=? and password=?';

        $stmt = $this->dbh->prepare($sql);
        $stmt->execute(array($mail, 
                            $pass));
        
        return $stmt->fetch(PDO::FETCH_ASSOC);    
    }
}