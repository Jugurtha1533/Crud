<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <title>Show</title>
    <style>
        .hed{
            background: #ccc;
            color: blue;
        }
        .hed h1{
            padding-top: 20px;
            padding-bottom: 25px;
        }
        .form{
            margin-top: 50px;
            background: #ccc;
        }
        .table{
            margin-top: 50px;
        }
    </style>
</head>
<body class="stretched">
    <div class="col-md-12 hed">
        <center>
        <h1>Voir les données</h1>
        </center>
    </div>
    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-12 p-0">
                        <table class="table table-dark">
                            <?php 
                                include 'database.php';

                                $id = $_GET['id'];
                                $b = new database();
                                $b->getProducts("products", "*", " productID = '$id'");
                                $result = $b->sql;
                                
                                $row = $result[0];

                                
                                

                             ?>
                          <tbody>
                                <tr>
                                    <th>Id</th>
                                    <td><?php echo $row['productID']; ?></td>
                                </tr>  
                                <tr>
                                    <th>Name</th>
                                    <td><?php echo $row['productName']; ?></td>
                                </tr>
                                <tr>
                                    <th>Reference</th>  
                                    <td><?php echo $row['reference']; ?></td>
                                </tr>
                                <tr>
                                    <th>description</th>  
                                    <td><?php echo $row['description']; ?></td>
                                </tr> 
                                <tr>
                                    <th>priceTaxTnc</th>
                                    <td><?php echo $row['priceTaxTnc']; ?></td>
                                </tr> 
                                <tr> 
                                    <th>priceTaxExcl</th>
                                    <td><?php echo $row['priceTaxExcl']; ?></td>
                                </tr>
                                <tr>
                                    <th>unitsInStock</th>  
                                    <td><?php echo $row['unitsInStock']; ?></td>
                                </tr>
                                <tr>
                                    <th>Langue</th>  
                                    <td><?php echo $row['libelle']; ?></td>
                                </tr>
                                <tr>  
                                    <th>Revenir à la page d'accueil</th>
                                    <td><a href="index.php" type="button" class="btn btn-primary">Retour</a></td>
                                </tr>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>