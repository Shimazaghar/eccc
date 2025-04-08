<?php
require_once 'config.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>

    <body>
        <center>
    <div class="card mt-5" style="width: 30rem; " >
    <form action="#" method="POST">
       
       <div class="text-center ">
       <h1><b>Login</b></h1></div>
       <label >Enter your email :</label>
       <input type="email" class="form-control" name="email">
       <label >Password :</label>
       <input type="password" class="form-control" name="password">
       <div><a href="Register.php">Registre</a></div>
       <input type="submit" value="Login">



   
   </div>
  </div>
  </form>
  
  </div>
</div>
</center>



    
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
<?php
      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
          $email=$_POST['email'];
          $password=$_POST['password'];

          $sql="SELECT * FROM clien WHERE email='$email' and password='$password'";
          $result=mysqli_query($con,$sql);
          $row=mysqli_fetch_array($result);
 
        if($result->num_rows<=0){

            echo '<script>
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Something went wrong!",
            footer: "<a href=\"login.php\">Why do I have this issue?</a>"
        });
    </script>';


        }
        else{
            $_SESSION['id']=$row['id_cl'];
        
            header ('location:index.php?success');
                  
        }
}
     ?>