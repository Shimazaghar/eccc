<?php 
require_once 'config.php';

?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <style>
            img{
                height:100px;
                width: 100px;
            }
        </style>

    </head>

    <body>

      <?php
         require_once 'navbar.php';
       ?>

      <?php 
        if(!isset($_SESSION['id']))
        {
          header("location:login.php?=$id");
        }
        else 
        {
          $sql=" SELECT * FROM clien WHERE id_cl='".$_SESSION['id']."' ";
          $result=mysqli_query($con,$sql);
          $row=mysqli_fetch_array($result);
          echo '<h1 class="text-center text-primary mt-4 mb-5">'.$row['nom_prenom'].'</h1>';
        }
      ?>

    <div class="container">
        <div class="row">
            <div class="col-5">
                <table class="table card shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                    <tr>
                        <th><h4>Picture</h4></th>
                        <th><h4>Name</h4></th>
                        <th><h4>Price</h4></th>
                        <th><h4>Quantite</h4></th>
                        <th><h4>Total</h4></th>
                    </tr>
                    <?php
                    $sql="select * from panier,produit where id_cl='".$_SESSION['id']."' and produit.id_pr=panier.id_pr";
                    $result=mysqli_query($con,$sql);
                    $sa=0;
                    while($row=mysqli_fetch_array($result))
                    {
                        echo '<tr>';
                        echo '<td><img src="uploads/'.$row['image'].'" class="card-img-top"></td>';
                        echo '<td>'.$row['nom'].'</td>';
                        echo '<td>'.$row['prix'].'</td>';
                        echo '<td>'.$row['qte_pa'].'</td>';
                        echo '<td>'.$row['qte_pa']* $row['prix'].'</td>';
                        $sa=$sa+($row['qte_pa']* $row['prix']);
                        echo '</tr>';
                    }
                    ?>
                </table>
            </div>
            <div class="col-2">
            </div>
            <div class="col-5 ">
            <table class="table card shadow-lg p-3 mb-6  bg-body-tertiary rounded">
                <tr>
                    <td>
                        <h4>Order Summary</h4>
                    </td>
                </tr>
                
                <?php
                $sa2=10;
                echo '<tr>';
                echo '<td><h5>Subtotal</h5></td>';
                echo '<td><h5>'.$sa.' DH</td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><h5>Shoping</h5></td>';
                echo '<td><h5>'.$sa2.' DH</h5></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><h5>Total</td>';
                echo '<td><h5>'.$sa+$sa2.' DH</h5></td>';
                echo '</tr>';
                echo '<tr>';
                echo '<td><button id="btn" class="btn btn-outline-dark">conferme</button></td>';
                echo '</tr>';
                ?>
                </table>
            </div>
        </div>
    </div>
       
       
       <?php
       require_once 'footer.php';
       ?>
       
       <script>
        var btn=document.getElementById("btn");
        btn.addEventListener("click",()=>{
            window.print();
        });
       </script>    
        
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>