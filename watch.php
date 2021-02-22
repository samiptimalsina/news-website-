
<?php 
  include('function.php');
 ?>

<!DOCTYPE html>
<html>
<head>
  <script data-ad-client="ca-pub-8179870584458892" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
   	 <h1><a href="news.php" class="" style="height: 50px;width: 100px; font-size: 25px; color: white;">Watches</a></h1>
   	 </div>
   </div>
   <div class="col-md-9 " style="border-right: 2px solid #888888;">
  <div class="row">
   <?php 
watchNews();

    ?>


  </div>
  
</div>
<div class="col-md-3" >
  <div class="categories">
    <h4>News Categories</h4>
    <?php 
     watchCat();
     ?>

  </div>
  
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