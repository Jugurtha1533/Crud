<?php 
    include 'database.php';
    if (isset($_POST['submit'])) {
        $productName = $_POST['name'];
        $reference = $_POST['reference'];
        $description = $_POST['description'];
        $priceTaxTnc = $_POST['priceTaxTnc'];
        $priceTaxExcl = $_POST['priceTaxExcl'];
        $unitsInStock = $_POST['unitsInStock'];
        $langID = $_POST['lang'];

        $a = new database();
        $a->insert(
            'products',
            [
                'productName'       =>  $productName,
                'reference'         =>  $reference,
                'description'       =>  $description,
                'priceTaxTnc'       =>  $priceTaxTnc,
                'priceTaxExcl'      =>  $priceTaxExcl,
                'langID'            =>  $langID,
            ]
        );
        if ($a == true) {
            header('location:index.php');
        }
    }
?>