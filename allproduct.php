<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop In Style</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
       <?php

require_once 'navbar.php';

?>
        <header class="bg-dark py-5 ">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-light">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-light-50 mb-0">✨ "Découvrez l'excellence, à portée de clic !" ✨</p>
                </div>
            </div>
        </header>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                   <!-- Debut d'affichage des produits -->
                

                   <?php
                   $sql="select * from produit";
                   $result=mysqli_query($con,$sql);
                   while($row=mysqli_fetch_array($result)){
                    if($row['qte']>0){






                        
                    echo'<div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="uploads/'.$row['image'].'"  />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">'.$row['nom'].'</h5>
                                <!-- Product price-->
                                '.$row['prix'].'
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="singleproduct.php?id='.$row["id_pr"].'">View options</a></div>
                        </div>
                    </div>
                    
                </div>';}
                   }
                   ?>
                </div>
                   <!-- Fin d'affichage des produits -->

            </div>
        </section>
        <!-- Footer-->
        <?php

require_once 'footer.php';

?>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>