<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    
    $success='';
    $error='';
    
    
    
    if (isset($_POST['cnp'])) {
        $result=validateCNP($_POST['cnp']);
        
        if($result) {
            $success='CNP VALID';
        } else {
            $error= 'CNP INVALID';
            }    
        }
    
    function debug($array) {
        echo '<pre>';
            print_r($array);
        echo '</pre>';    
    }
    
    
    function validateCNP($cnp) {
        $matches;
        //$regexCNP= '/^\d{1}\d{2}(0[1-9]|1[0-2])(0[1-9]|[12]\d|3[01])(0[1-9]|[1-4]\d| 5[0-2]|99)\d{4}$/';
        //$regexCNP='/^(te).*(01)';
        
        
         $emailRegex = '/^(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){255,})(?!(?:(?:\x22?\x5C[\x00-\x7E]\x22?)|(?:\x22?[^\x5C\x22]\x22?)){65,}@)(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22))(?:\.(?:(?:[\x21\x23-\x27\x2A\x2B\x2D\x2F-\x39\x3D\x3F\x5E-\x7E]+)|(?:\x22(?:[\x01-\x08\x0B\x0C\x0E-\x1F\x21\x23-\x5B\x5D-\x7F]|(?:\x5C[\x00-\x7F]))*\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-[a-z0-9]+)*\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-[a-z0-9]+)*)|(?:\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\]))$/Di';
         $valid = preg_match($emailRegex, $cnp, $matches);
        
        debug($matches);
    
        return $valid;
    }

?>    
    //echo$_POST['CNP'];
?>

<div> <?php echo $success; ?></div>
<div> <?php echo $error; ?> </div>
<form>
    <input type="text" placeholder="CNP" name="cnp"/>
    <input type="submit" value="Submit"/>
</form>