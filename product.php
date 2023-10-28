<?php
include('s1.php');
$con=mysqli_connect('localhost','root','','shopping');
?>
<center><h1>Available Product At Shop</h1></center>
<div class=row>
    <div class=col-md-2></div>
      <div class=col-md-8 style="border=5px solid purple">
           <div class=row>
            <?php
            $ct=$_REQUEST['pcat'];
            $q="select * from product where pcat='$ct'";           
            $rs=mysqli_query($con,$q);           

            while($r=mysqli_fetch_array($rs))
            {
            ?>
            <div class="col-md-4" style="border:2px solid green"> 
            <div class="card" style="width: 18rem;">
  <img src="image//<?php echo $r[5]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $r[1]?></h5>
    <p class="card-text"><?php echo $r[4]?></p>
    <p class="card-text"> prize : <?php echo $r[3]?></p>
    <a href="#" class="btn btn-primary">Buy</a>
    <a href="#" class="btn btn-danger">Add to cart</a>
  </div>
</div>

         </div>
         <?php
            }
         ?>
    </div>
</div>