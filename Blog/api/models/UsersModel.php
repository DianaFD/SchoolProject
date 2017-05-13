<?php
    
//     require_once "DB.php";
    
//     class UsersModel extends DB {
        
//         function insertUser($user) {
            
//             $sql= "INSERT INTO users (first_name, last_name, nick_name, email, password, role, age, gender, creation_date, last_login, last_modified) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
            
//             $stmt= $this->dbh->prepare($sql);
//             $stmt->execute(array($user['first_name'],
//                                  $user['last_name'],
//                                  $user['nick_name'],
//                                  $user['email'],
//                                  $user['password'],
//                                  $user['role'],
//                                  $user['age'],
//                                  $user['gender'],
//                                  $user['creation_date'],
//                                  $user['last_login'],
//                                  $user['last_modified']));
//             return array("rowsAffected"=>$stmt->rowCount(), "errorCode"=> $stmt->errorInfo()[1], "errorMsg"=> $stmt->errorInfo()[2]);
            
//             function checkUser($email, $pass) {
                
//                 $sql = 'SELECT name, email, id FROM users where email=? and password=?';
//                 $stmt= $this->dbh->prepare($sql);
//                 $stt->execute(array($email, $pass));
//                 return $stmt->fetch(PDO::FETCH_ASSOC);
//             }
//         }
//     }


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