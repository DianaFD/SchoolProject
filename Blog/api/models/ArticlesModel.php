<?php
// // Recover GET request values
// printArray($_GET);
// echo $_GET["search"];

// // Recover POST request values
// printArray($_POST);
// echo $_POST["name"];

// printArray($_FILES);
// echo $_FILES["file"]["name"];

// $file = $_FILES["file"];
// move_uploaded_file($file[""], "uploads/" . $file["name"]);
// // Save infos ....


// // Redirect to forms view
// header("Location: forms.php");

// function printArray($array) {
//     echo "<pre>";
//     print_r($array);
//     echo "</pre>";


// //$file = $_FILES["file"];
// //move_downloaded_file($file["tmp_name"], "downloads/" . $file["name"]);

// }

require_once "DB.php";

class ArticlesModel extends DB {
    function selectAll() {
        $sql = 'select * from articles';
        return $this->selectSql($sql);
    }
    
    function insertItem($item) {
        $sql = 'insert into articles (title, content, category_id, user_id, main_image_url) values(?, ?, ?, ?, ?)';
        
        print_r ($item);
        exit;
        
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute(array($item['title'], 
                            $item['content'], 
                            $item['category_id'], 
                            $item['user_id'],
                            $item['main_image_url']));
        
        return $this->dbh->lastInsertedId();
    }
    
    function updateItem($item) {
        $sql = 'update articles set title = ?, content = ?, category_id = ?  where id = ?';
    
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute(array($item['title'], 
                            $item['content'], 
                            $item['category_id'], 
                            $item['id']));
        return $stmt->rowCount();    
    }
    
    function deleteItem($id) {
        $sql = "delete from articles where id = ?";
        
        $stmt = $this->dbh->prepare($sql);
        $stmt->execute(array($id));
        return $stmt->rowCount(); 
    }
}  