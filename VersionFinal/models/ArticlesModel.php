<?php

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
