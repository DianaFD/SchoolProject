<form method="POST">
    <input type="text" placeholder="Enter user id" name="userId"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
    
    
<?php
    require_once('db.php');
    
    // check if payload is present
    if ( !isset($_POST['submit']) ) {
        die();
    }
    
    //delete user if userId is present
    
    $userId = isset($_POST['userId']) ? $_POST['userId'] : null;
    
    $query3 = 'delete from electricieni where id = ?';
    $sth3 = $dbh->prepare($query3);
    $sth3->execute(array($userId));
    $result = $sth3->rowCount();
    
    $age = '25';
    $gender = 'F';
    
    $filters = array('sex'=>'M', 'varsta'=>'25');
    
    // $res = $dbh->query('SELECT * FROM `rezistenti`', PDO::FETCH_ASSOC);

    // foreach ($res as $row) {
    //     print $row['nume'] . "\t";
    //     print $row['email'] . "\t";
    //     print $row['age'] . "\n";
    //     echo '<br>';
    // }
    
    $query = 'SELECT * FROM `electricieni`';
    $query2 = 'SELECT * FROM `electricieni` where age = :varsta and gender = :sex';
    
    $sth = $dbh->prepare($query);
    $sth->execute(array($age, $gender));
    $result = $sth->fetchAll(PDO::FETCH_BOTH);
    
    $sth2 = $dbh->prepare($query2);
    $sth2->execute($filters);
    $result2 = $sth2->fetchAll(PDO::FETCH_BOTH);
    
    echo '<pre>';
        print_r($result);
        // echo 'next';
        // print_r($result2);
    echo '</pre>';
    
    
    
    
    print_r('DELETED ' . $result . ' rows');
    

?>
    
    
    