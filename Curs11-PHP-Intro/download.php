<?php
if (isset($_GET ['file']) && basename($_GET['file']) == $_GET['file']) {
    $filenmane =$_GET['file'];
} else {
$filename = NULL;
}
$$err='Sorry, the file is unavailable';

if (!$filename) {
    echo $err;
} else{

$path=" downloads/" .$filename;
if(file_exists($path) && is_readable($path)) {
$size = filesize($path);
//orice avem de descarcat, ne transfera pt download
header('Çontent-Type: application/octet-stream');
header('Content-Length: ' .$size);
//nu mai afiseaza inline, ci afiseaza atasamentul
header('Constent-Disposition: attachement; filename='.$filename);
header('Content-Transfer-Encoding: binary');

$file= @fopen($path, 'rb');

if ($file) {
    fpassthru($file);
    exit;
} else {
    echo $err;
}
    } else {
        echo $err; 
    }
}

?>