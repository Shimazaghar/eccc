<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Product Page</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<?php

require_once 'navbar.php';

?>
    <?php
   $id=$_GET['id'];
    $sql="select * from produit where id_pr='".$id."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);

    ?>
   
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="uploads/<?php echo $row['image'] ?>" class="img-fluid" alt="Product Image">
            </div>
            <div class="col-md-6">
                <h1 class="display-5"><?php echo $row['description_pr'] ?></h1>
                <p class="text-muted"><?php echo $row['nom'] ?></p>
                <h3 class="text-danger"><?php echo $row['prix']."DH";?></h3>
                <p class="lead">This is an amazing product that you would love to have. It comes with excellent features and a sleek design.</p>
                <form action="addtocard.php?id=<?php echo $id; ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $row['id_pr'] ?>">
                <input type="number" name="qte" min=1 max=<?php echo $row['qte'] ?>>
                <input class="btn btn-dark btn-lg" type="submit" value="Add to Cart">
            </div>
        </div>
        
    </div>
    </form>
    
    <?php



require_once 'footer.php';


?>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>