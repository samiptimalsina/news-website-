
<?php
include('function.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="nav.css">
	<title></title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>

</head>
<body>
	<nav class="nav-bar">
    <h1 style="color: white;">TECHNOLOGY SANSAR</h1>
      <span id="span">&#9776;</span>
      <div class="right-menu">
       <ul id="menu">
         <li><a href="">Home</a></li>
         <li><a href="">About</a></li>
         <li><a href="">News</a></li>
         <li><a href="">gadgets</a></li>
         <li><a href="">tech</a></li>
         
         <li><a href="">offers</a></li>

       </ul>
      
       </div>
     
   </nav>
   <div class="box">
   	<div class="container">
      <div style="padding-top: 20px;: ">
      <a href="" class="btn btn-primary pull-right">Login</a></div>
   	 <h1><a href="admin.php" class="" style="height: 50px;width: 100px; font-size: 25px; color: white;">Remember First which item you have selected</a></h1>
     
   	 </div>
   </div>
   <div class="col-md-9 " style="border-right: 2px solid #888888;">
  <div class="row">
   
     <div class="container">
         <form action="admin1.php" method="POST" enctype="multipart/form-data">
          <br><br>
          <div class="form-group ">
            <label>Mobile</label>
          <select name="mobile" class="custom-select col-md-3" >
               
               <option selected>Select One</option>
               <?php 
                

  global $db;
  $sql="select * from mobile_categories";
  $run=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($run)){
    $mobile_cat_id=$row['mobile_cat_id'];
    $mobile_cat_title=$row[ 'mobile_cat_title'];
    echo " <option value='$mobile_cat_id'> $mobile_cat_title</option>";
  }




 ?>
                
             
               <!-- <option value="volvo">Lenovo</option>
               <option value="fiat">Iphone</option>
               <option value="audi">Samsung</option> -->
          </select>
          </div>
            <div class="form-group ">
            <label>Laptop & desktop</label>
          <select name="laptop" class="custom-select col-md-3" >
               <option selected>Select One</option>
                 <?php 
                

  global $db;
  $sql="select * from computers_cat";
  $run=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($run)){
    $computers_id=$row['computers_id'];
    $computers_title=$row['computers_title'];
    echo " <option value='$computers_id'>$computers_title</option>";
  }




 ?>
          </select>
      </div> 
            <div class="form-group ">
            <label>News Categories</label>
          <select name="news_cat_id" class="custom-select col-md-3" >
               <option selected>Select One</option>
                 <?php 
                

  global $db;
  $sql="select * from news_categories";
  $run=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($run)){
    $cat_id=$row['cat_id'];
    $cat_title=$row['cat_title'];
    echo " <option value='$cat_id'>$cat_title</option>";
  }




 ?>
              
          </select>
          </div>
          <!-- <div class="form-group "> 
            <label>Others</label>
          <select name="cars" class="custom-select col-md-3">
               <option selected></option>
               
          </select>
         </div> -->
    <div class="form-group">
       <br><br>
      <label>Title</label>
       
           <input type="text"  name="title" class="form-control "style="width: 85%;">
        </div>
           <div class="form-group">
                <label for="comment">Short Desc</label>
          <textarea class="form-control" rows="3" id="comment" name="short_desc" style="width: 85%;"></textarea>
         </div>
       
  
       <div class="form-group">
          <label for="comment">Desc</label>
           <textarea class="form-control" rows="6" id="comment" name="desc" style="width: 85%;"></textarea>
       </div>
       <div >
         <input type="file" name="image1">
       </div>
        <button type="submit" name="submit"  class="btn btn-primary">Submit</button>
      </form>
     <br><br>
     </div>
    </div>
    
    </div>
    


  </div>
  
</div>
<div class="col-md-3" >
  <div class="categories">
    <h4>News Categories</h4>
  
  <?php  
global $db;
  $sql="select * from mobile_categories";
  $run=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($run)){
    $mobile_cat_id=$row['mobile_cat_id'];
    $mobile_cat_title=$row['mobile_cat_title'];
    echo "
    <li><a href='news.php?mobile_cat_id=$mobile_cat_id'>$mobile_cat_title</a></li>
 ";
}
 ?>
  
</div>
</div>
<?php 

include('footer.php');
 ?>

<script>
      /* function myFunction(){ 
           var x = document.getElementById("ul"); 
            
            if(x.style.display == "block")
            {
                x.style.display = "none";
            }
            else{
                x.style.display = "block";
            }
        }
       */

        $(document).ready(function(){
          $('#span').click(function(){
            $('#menu').toggle(2000).style.display="block";
          })
        }); 
    </script>
</body>
</html>


<?php

$db=mysqli_connect('localhost','root','','news');

if(isset($_POST['submit'])){

 $laptop= $_POST['laptop'];
 $mobile= $_POST['mobile'];
 $cat_id=$_POST['news_cat_id'];
 $title= $_POST['title'];
 $desc= $_POST['desc'];

 $image1=$_FILES['image1']['name'];
 $tem_image=$_FILES['image1']['tmp_name'];
 $short_desc=$_POST['short_desc'];
 $db=mysqli_connect('localhost','root', '','news');
 move_uploaded_file($tem_image, "product-img/$image1"); 
 $sql="INSERT INTO `all_product`( `computers_id`, `mobile_cat_id`, `news_cat_id`, `title`, `desc`, `image`, `short_desc`) VALUES ('$laptop','$mobile','$cat_id','$title','$desc', '$image1','$short_desc')";
 $run=mysqli_query($db,$sql);
 if($run==true){
  echo"<script>alert('data incerted')</script>";
 }
 else{
  echo"<script>alert('data Not incerted')</script> ";
  echo " failled". $sql . "<br>" . $db->error;
}
}



 ?>