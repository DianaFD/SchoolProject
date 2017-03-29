<h1>PHP Intro</h1>

<?php echo "WEB9"; ?>

<?php 
    $name = "Anca";
    var_dump($name);
    echo "<br>";
    
    $number = 10;
    var_dump($number);
    echo "<br>";
    
    $price = 9.99;
    var_dump($price);
    echo "<br>";
    
    $adevarat = TRUE;
    var_dump($adevarat);
    echo "<br>";
    
    $minciuna = FALSE;
    var_dump($minciuna);
    echo "<br>";
    
    // String operators
    echo $name . " are " . $number . " ani.";
    echo $name .= " Balc";
    
    echo $sum = $number + $price;
    
    echo $number++;
    echo ++$number;
    
    echo "<br>";
    
    define("WEB9", "Intro PHP");
    echo WEB9;
    
    $hour = date("H");
    echo "Current hour" . $hour;
    // < 10 dimineata
    // 10 - 18 zi
    // > 18 seara
    if ($hour < 10) {
        echo "Buna dimineata";
    } elseif ($hour <= 18) {
        echo "Buna ziua";
    } else {
        echo "Buna seara";
    }
    
    echo "Trala";
    
    $day = date("D");
    
    if ($day === "Sun" || $day === "Sat") {
        echo "Party! Weekend!";
    } else {
        echo "MERGI LA WORK!!!";
    }
    
    $color = "blue";
    // red, yellow, blue
    switch ($color) {
        case "red":
            echo "Current color is " . $color;
            break;
        case "yellow":
            echo "Current color is " . $color;
            break;
        case "blue":
            echo "Current color is " . $color;
            break;
    }
    
    echo "<br>";
    for ($i = 0; $i < 10; $i++) {
        echo "Current index = " . $i . "<br>";    
    }
    
    // 0 1 1 2 3 5 ...
    $a = 1;
    $b = 1;
    //$c = $a + $b;
    for ($c = 1; $c < 100; $c = $a+$b) {
        echo "FN = " . $c . " ";
        $a = $b;
        $b = $c;
    }
    
?>



