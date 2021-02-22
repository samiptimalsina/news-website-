

<?php
include('function.php') 
 ?>

<!DOCTYPE html>
<html>
<head>
  <script data-ad-client="ca-pub-8179870584458892" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <title></title>
  <link rel="stylesheet" type="text/css" href="nav.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
  <style type="text/css">

    *{
      margin: 0;
      padding: 0;
    }
      .nav-bar{
        background-color: purple;
        
        width: 100%;
        text-align: center;
        height: 20vh;
      

      }
      .nav-bar div ul li{
        padding: 20px;

              }

       .nav-bar ul li a{
     
    text-transform: uppercase;
    font-family: 'montserrat', monospace;
    text-decoration: none;
    color: white; 
    font-size: 1.5em;   }

    
  .nav-bar .right-menu{
    background-color: purple;
    float: right;
    position: relative;
    

   }
    .nav-bar ul li{
      float: left;
      list-style: none;
      padding: 0 20px;
    }

      span{
    display: none;
    float: right;
      padding-right: 20px;
      font-size: 30px;
  }
  h1{
    text-align: left;
    font-family: monospace;
    color: #fff;
   height: 45px;

  }
  .latest-news{
  text-align: center;
  width: 100%;
  height: 10vh;

}  


  
@media(max-width: 991px){
  .nav-bar .right-menu ul li {
      float: none;
      display: block;

  }
  .right-menu{
    width: 100%;
    text-align: center;
    float: none;

  }
span{
  display: block;
  color: white;
  cursor: pointer;
 
}
.menu{
  display: block;
}}

            

.product{
  
}       

     
 #zoom{
  transition: 2s;
  overflow: hidden;
  }
  #zoom:hover{
    transform: scale(1.5);
    overflow: hidden;
  }

    .img{
      overflow: hidden;
    }
    .content-box{
      
      
    }
  .title-box{
    box-sizing: content-box;
    text-align: center;
    padding: 20px;
    position: relative;
  }

.categories{
 
  color: white;
  font-size: 1.2em;
  background-color: whitesmoke;


}
.categories h4{
  background-color: purple;
  border-radius: 5px;

  padding: 10px;
}
.home-news-title{
  padding-left: 20px;

}



  </style>

</head>
<body>
   <nav class="nav-bar">
    <h1>TECHNOLOGY SANSAR</h1>
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

<div class="container">
  <h2>Latest Up comming product</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src=product-img/iphone.png alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="product-img/iphone 12.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="product-img/iphone12max.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="latest-news">
  <h2>Latest News</h3>
</div>
<div class="container">
     <div class="row">
      
        <?php 
          homeNews();
         ?>
     
      </div>    <!--row end  -->
      <hr style="background-color: whitesmoke;">

<div class="col-md-9 " style="border-right: 2px solid #888888;">
    <?php 
      newsFoot();

     ?>
  
</div>
<div class="col-md-3" >
  <div class="categories">
  <h4>News Categories</h4>
 <li><a href="mobile.php">Mobile News</a></li>
    <li><a href="laptop.php">Laptop News</a></li>
    <li><a href="watch.php">Watch</a></li>
    <li><a href="Accessories.php">Accessories</a></li>

    
  </div>
  
</div>
</div>




<!-- Footer -->
<footer class="page-footer special-color-dark pt-4">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-4">
        <p class="footer-font">Develope & Mantain &copy; By:Samip Timalsina</p>

      
      </div>  
      <div class="col-md-6 mb-4">
         <p class="footer-font">Templete By:Technoyouths Nepal</p>
      </div>
    </div>
  </div>
</footer>



<script>
$(document).ready(function(){
  // Activate Carousel
  $("#myCarousel").carousel();
    
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarousel").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarousel").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarousel").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarousel").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarousel").carousel("next");
  });
});
</script>
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
            $('#menu').toggle(2000);
          })
        }); 
    </script>
</body>
</html>
<?php 

  $con =mysqli_connect('localhost','technolo_samip','Samip100$','technolo_news');
  if($con==true){
    echo "<script>Database connection successfull</script>";

  }

 ?>