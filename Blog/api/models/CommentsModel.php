<?php

//     require_once "DB.php";
    
//     class CommentsModel extends DB {
        
//         function insertItem($item) {
//             $sql = 'INSERT INTO comments (comments) value (?)';
            
//             $stmt=$this->dbh->prepare($sql);
//             $stmt->execute();
//             return $stmt->fetchAll(PDO::FETCH_ASSOC);
//         }
//     }    

require_once "DB.php";

class CommentsModel extends DB {
    function selectAll() {
        $sql = 'select * from comments';
        return $this->selectSql($sql);
    }
    
    function insertItem($comment) {
        $sql= 'insert into articles (article_id, content, user_id) values (?, ?, ?)';
        
        
        $stmt=$this->dbh->prepare($sql);
        $stmt->execute(array($comment ['content'],
                             $comment ['user_id'] ,
                             $comment ['article_id']));
                             
        return $stmt->rowCount();                     
    }
   
    function deleteItem($id) {
        $sql= 'DELETE FROM comments WHERE id= ?';
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute($id);
    }
 } 