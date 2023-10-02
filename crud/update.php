<?php 
    include 'database.php';

    if (isset($_POST['submit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $reference = $_POST['reference'];
        $description = $_POST['description'];
        $priceTaxTnc = $_POST['priceTaxTnc'];
        $priceTaxExcl = $_POST['priceTaxExcl'];
        $unitsInStock = $_POST['unitsInStock'];
        $codeLang = $_POST['lang'];

        $date = date("Y-m-d h:i:s A");

        $a = new database();
        $a = new database();
        $a->update(
                'products',
                [
                    'productName'   => $name,
                    'reference'     => $reference,
                    'description'   => $description,
                    'priceTaxTnc'   => $priceTaxTnc,
                    'priceTaxExcl'  => $priceTaxExcl,
                    'unitsInStock'  => $unitsInStock,
                    'langID'  => $codeLang,
                ],
                [
                    'key'   => "productID",
                    'value' => "$id"
                ]
            );

        if ($a == true) {
            header('location:index.php');
        }
    }
?>