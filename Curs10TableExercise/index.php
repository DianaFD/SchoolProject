

<table border="1">
 <?php  for ($i = 1; $i <= 10; $i++) { ?>
     <tr>
         <?php for ($j=1; $j<=10; $j++) { ?> 
             <td> value</td>
         <?php } ?>
     </tr>
     <?php } ?>
</table>

<?php
    $table ='<table border="1">';
    for ($i=1; $i<=10; $i++) {
    $table .= "<tr>";
    for($j=1; $j<=10; $j++) {
        $total= $i + $j;
            if ($total % 2 == 0) {
                $table .= "<td>value </td>";
            } else {
                $table .= '<td style="background-color:#000"> value </td>';
            }
        }
    $table .= "</tr>";
    }
$table .="</table>";
echo $table
?>

<?php 
//PHP FUNCTIONS
function buildTable ($nrL = 10, $nrC = 10) {
    //function script
    //My first function
    $table ='<table border="1">';
    for ($i=1; $i <= $nrL; $i++) {
    $table .= "<tr>";
        for($j=1; $j <= $nrC; $j++) {
        $total= $i + $j;
            if ($total % 2 == 0) {
                $table .= "<td>value</td>";
            } else {
                $table .= '<td style="background-color:#000"> value </td>';
            }
        }
        $table .= "</tr>";
    }
$table .="</table>";
echo $table;
echo "<br>";
}

buildTable();
//echo"<br>";
buildTable();
//echo"<br>";
buildTable();


function returnTest() {
//echo "return message";
 return "return message";   
}

$message= returnTest();
echo $message;

$x=1; 
//scop global care e de fapt local
define( "X", 2);

function varScope() {
    global$x;
    echo $x;
//nu o sa returneze 1 pt ca valoarea lui x e definita in afara functiei; ea trebuie definita in interiorul functiei
// variabilele
//constantele sunt globale
    echo X; 
}