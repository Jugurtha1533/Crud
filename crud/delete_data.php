<?php 
    include 'database.php';

    $id = $_POST['id'];

    $a = new database();

    
    $res = $a->delete(
        'products',
        [
            'key'   => "productID",
            'value' => "$id"
        ]
    );

    if ($a == true) {
        header('location:index.php');
    }
?>