<?php
require_once 'config.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Shop in Style</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="allproduct.php">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <?php $sql="select * from categorie";
                   $result=mysqli_query($con,$sql);
                   while($row=mysqli_fetch_array($result)){
                    echo '<li><a class="dropdown-item" href="categorie.php?cat='.$row['id_cat'].'"> '.$row['nom_cat'].'</a></li>';

                   }
                   $sql = "SELECT count(*) as nb FROM panier WHERE id_cl='" . $_SESSION['id'] ."'";
                        $result = mysqli_query($con, $sql);
                        $row1 = mysqli_fetch_array($result);
                   
                   
                   
                   
                   
                   
                   ?>
                   
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <a href="panier.php" class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                <?php echo $row1['nb']  ?>
                            </span>
                            </a>
                            <?php 
                        if(isset($_SESSION['id'])) {
                          ?>
                       
             <a href="logout.php" class="btn btn-outline-dark">
                            <i class="bi-box-arrow-in-left me-1"></i>
                           logout
                        </a>
 
                    <?php
                     }else {
                        ?>
                   <a href="login.php" class="btn btn-dark">
                        <i class="bi-person-circle me-1"></i>
                        Login
                        </a>
                        <?php
                     }
                    ?>
                            
                    </form>
                    
            </div>
        </nav>