<?php
require_once 'config.php';
     $qte= $_POST['qte'];

     $id=$_GET['id'];
 if (!isset($_SESSION['id'])){
     header("location:login.php?id=$id");
 }
 else{
    $sql="select COUNT(*) as nb from panier where  id_cl='".$_SESSION['id']."'and id_pr='".$id."'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
     

    if ($row['nb']==0){
        $sql="INSERT into panier(id_pr,id_cl,qte_pa)
        value('".$id."','".$_SESSION['id']."','".$qte."')";
        $result=mysqli_query($con,$sql);
         
            $sql2="UPDATE produit set qte=qte-'$qte' where id_pr='".$id."'";
            $result2=mysqli_query($con,$sql2);
            header("location:singleproduct.php?id=$id");
         
      
    }
    else{
        $sql="UPDATE panier set qte_pa=qte_pa+'$qte' where id_pr='".$id."'";
        $result=mysqli_query($con,$sql);
        $sql2="UPDATE produit set qte=qte-'$qte' where id_pr='".$id."'";
        $result2=mysqli_query($con,$sql2);

        header("location:singleproduct.php?id=$id");

    }
}

?>