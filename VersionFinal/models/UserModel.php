<?php
    class UsersModel extends DB {
        function checkUser($email, $pass) {
            $sql = 'select  first_name, last_name, email from users where email=? and password=?';

            $stmt = $this->dbh->prepare($sql);
            $stmt->execute(array($mail,
                                $pass));

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function getUserByEmail($email, $pass) {
            $sql = 'select * from users where email = ?';

            $stmt = $this->dbh->prepare($sql);
            $stmt->execute(array($mail,
                                $pass));

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        function saveUser($email, $pass) {
            $sql = 'select  first_name, last_name, email from users where email=?';

            $stmt = $this->dbh->prepare($sql);
            $stmt->execute(array($mail,
                                $pass));

            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }
