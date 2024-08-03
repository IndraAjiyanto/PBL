<?php
require_once 'cuti.php';
$cuti = new cuti();
$hapus = $cuti->hapus($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Data terhapus
    </h1>
    <a href="index.php">kembali</a>
    
</body>
</html>