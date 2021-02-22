
<?php 
$db=mysqli_connect('localhost','technolo_samip','Samip100$','technolo_news');


if($db==true){
	echo "<script>Database connection successfull</script>";
}
else{
	"<script>Database not connection</script>";
}
// this function for show news categories

function newsCat(){

	global $db;
	$sql="select * from news_categories";
	$run_sql=mysqli_query($db,$sql);

	while ($row=mysqli_fetch_array($run_sql)) {
		    $cat_id=$row['cat_id'];
		    $cat_id=$row['cat_title'];
		    echo "  
               <li><a href='news.php?cat_id=$cat_id'>$cat_id</a></li>";  
	    }

     
}

// thsi function is for homeNews shwo

function homeNews(){
	global $db;
	$select="select * from all_product order by 1 DESC LIMIT 0,6";
	$run=mysqli_query($db,$select);

	while($row=mysqli_fetch_array($run)){
		$id=$row['id'];
		$title=$row['title'];
		$image=$row['image'];
		$short_desc=$row['short_desc'];
		echo " <div class='col-md-4 col-sm-6 content-box'>
       <div class='product'>
       <div class='img'> 
       <a href='details.php?id=$id' style='text-decoration:none;'>
         <img src='product-img/$image' style='height: 300px;
         width: 400px;' id='zoom'>
         </div>
         <div class='title-box'>
          <h3>$title</a></h3>
          <p>$short_desc</p>
          </div> 
       </div>
       </div> ";   
	}
}

// this is for news foot 
function newsFoot(){
	global $db;
	$select="select * from all_product order by 1 ASC LIMIT 0,2";
	$run=mysqli_query($db,$select);

	while($row=mysqli_fetch_array($run)){
		$id=$row['id'];
		$title=$row['title'];
		$image=$row['image'];
		$short_desc=$row['short_desc'];
		echo " <div class='col-md-12 ' >
  <div class='row'>
    <div class='col-md-6'>
           <div class='home-news'>
            <img src='product-img/$image' style='height: 250px; width: 400px;'> 
           </div>
    </div> 
    <div class='col-md-6'>
    <div class='home-news-title'>
        <h2><a href='details.php?id=$id'>$title
        .</a></h2>
         <p>$short_desc</p>
         <a href='details.php? id=$id' class='btn btn-primary'>Read More</a>
       </div>
    </div>
</div>
</div> ";   


	}
}


//for admin panel


function mobileCat(){
	global $db;
	$sql="select * from mobile_categories";
	$run=mysqli_query($db,$sql);
	while($row=mysqli_fetch_array($run)){
		$mobile_cat_id=$row['mobile_cat_id'];
		$mobile_cat_title=$row['mobile_cat_title'];
		echo "
    <li><a href='mobile.php?mobile_cat_id=$mobile_cat_id'>$mobile_cat_title</a></li>
 ";
	}
}

// this is for computer categories view 

function laptopDesktop(){
global $db;
  $sql="select * from computers_cat";
  $run=mysqli_query($db,$sql);
  while($row=mysqli_fetch_array($run)){
    $computers_id=$row['computers_id'];
    $computers_title=$row['computers_title'];
   echo  "
    
    <li><a href='laptop.php?computers_id=$computers_id'>$computers_title</a></li>
    


 ";
  }
}



// this code for news page

function newsPage(){

 global $db;
  $select="select * from all_product order by 1 ASC LIMIT 0,2";
  $run=mysqli_query($db,$select);

  while($row=mysqli_fetch_array($run)){
    $id=$row['id'];
    $title=$row['title'];
    $image=$row['image'];
    $short_desc=$row['short_desc'];
    $desc=$row['desc'];
    $image=$row['image'];

 echo "
    <div class='col-md-6'>
           <div class='home-news'>
           <a href='details.php?id=$id'> <img src='product-img/$image' style='height: 250px; width: 400px;'> </a>
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
        $desc
         </p>
         <a href='details.php?id=$id' class='btn btn-primary'>Read More</a>
       </div>
    </div>
";

}
}

// this is for whtach categories
function watchCat(){
  global $db;
  $sql="select * from watch_categories";
  $query=mysqli_query($db,$sql);
  while ( $row=mysqli_fetch_array($query)) {
    $watch_id=$row['watch_id'];
    $watch_title=$row['watch_title'];
    $watch_desc=$row['watch_desc'];
    echo "<li><a href='watch.php?watch_id=$watch_id'> $watch_title</a></li>";


  }

}



// this is for mobile categories
  function mobileNews(){
   global $db;
if(!isset($_GET['mobile_cat_id'])){
  $get1_mobile="SELECT * FROM `all_product`";
    $run1_sql=mysqli_query($db,$get1_mobile);
    while ($row=mysqli_fetch_array($run1_sql)) {
      $id1=$row['id'];
      $title1=$row['title'];
      $desc1=$row['desc'];
      $image1=$row['image'];
      $short1_desc=$row['short_desc'];
      echo "<div class='col-md-12' >
  <div class='row'>
    <div class='col-md-6'>
           <div class='home-news'>
            <a href='details.php?id=$id1'><img src='product-img/$image1' style='height: 250px; width: 400px;'></a> 
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id1'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
       <a href='details.php?id=$id1'> $desc1 <br> $short1_desc

         </p>
         <a href='details.php?id=$id1'class='btn btn-primary'>Read More</a>
       </div>
    </div>
  </div>  
</div>";

}
}

if(isset($_GET['mobile_cat_id'])){
    $mobile_cat_id=$_GET['mobile_cat_id'];
    $sql="select * from mobile_categories where mobile_cat_id='$mobile_cat_id'";
    $run_query=mysqli_query($db,$sql);
    $row_find=mysqli_fetch_array($run_query);
    $mobile_cat_title=$row_find['mobile_cat_title'];
    $get_mobile="SELECT * FROM `all_product` WHERE mobile_cat_id = '$mobile_cat_id'";
    $run_sql=mysqli_query($db,$get_mobile);
    $count=mysqli_num_rows( $run_sql);
              if ($count==0) {
                echo "<h1>No product found</h1>";
                
            
              }
              else{
                 echo "<div ><h3></h3> 
                      <p></p>
                        </div>";
              }
   
    while ($row=mysqli_fetch_array($run_sql)) {
      $id=$row['id'];
      $title=$row['title'];
      $desc=$row['desc'];
      $image=$row['image'];
      $short_desc=$row['short_desc'];
      echo "<div class='col-md-12  '>
  <div class='row'>
    <div class='col-md-6'>
           <div class='home-news'>
           <a href='details.php?id=$id'>  <img src='product-img/$image' style='height: 250px; width: 400px;'> </a>  
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
       <a href='details.php?id=$id'> $desc <br> $short_desc</a>  

         </p>
         <a href='details.php?id=$id'class='btn btn-primary'>Read More</a>
       </div>
    </div>
  </div>  
</div>";

      
    }
  

}

  }


// this code for laptop and desktop categories mews


    function laptopNews(){
   global $db;
if(!isset($_GET['computers_id'])){
  $get1_mobile="SELECT * FROM `all_product`";
    $run1_sql=mysqli_query($db,$get1_mobile);
    while ($row=mysqli_fetch_array($run1_sql)) {
      $id1=$row['id'];
      $title1=$row['title'];
      $desc1=$row['desc'];
      $image1=$row['image'];
      $short1_desc=$row['short_desc'];
      echo "<div class='col-md-12'>
  <div class='row'>
    <div class='col-md-6'>
           <div class='home-news'>
           <a href='details.php?id=$id1'>
            <img src='product-img/$image1' style='height: 250px; width: 400px;'> </a>
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id1'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
       <a href='details.php?id=$id1'> $desc1 <br> $short1_desc</a>

         </p>
         <a href='details.php?id=$id1'class='btn btn-primary'>Read More</a>
       </div>
    </div>
  </div>  
</div>";

}
}

if(isset($_GET['computers_id'])){
    $computers_id=$_GET['computers_id'];
    $sql="select * from all_product where computers_id ='$computers_id'";
    $run_query=mysqli_query($db,$sql);
    $row_find=mysqli_fetch_array($run_query);
    $computers_cat_title=$row_find['title'];
    $get_computers_id="SELECT * FROM `all_product` WHERE computers_id='$computers_id'";
    $run_sql=mysqli_query($db,$get_computers_id);
    $count=mysqli_num_rows( $run_sql);
              if ($count==0) {
                echo "<h1>No product found</h1>";
                
            
              }
              else{
                 echo "<div ><h3></h3> 
                      <p></p>
                        </div>";
              
   
    while ($row=mysqli_fetch_array($run_sql)) {
      $id=$row['id'];
      $title=$row['title'];
      $desc=$row['desc'];
      $image=$row['image'];
      $short_desc=$row['short_desc'];
      echo "<div class='col-md-12  '>
  <div class='row'>
    <div class='col-md-6'>
           <div class='home-news'>
            <img src='product-img/$image' style='height: 250px; width: 400px;'> 
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
       <a href='details.php?id=$id'> $desc <br> $short_desc  </a>

         </p>
         <a href='details.php?id=$id'class='btn btn-primary'>Read More</a>
       </div>
    </div>
  </div>  
</div>";

      
    }
  

}
}

  }


  function watchNews(){
   global $db;
if(!isset($_GET['watch_id'])){
  
  $sql="SELECT * FROM `all_product ";
    $run=mysqli_query($db,$sql);
    while ($row=mysqli_fetch_array($run)) {
      $id=$row['id'];
      $title=$row['title'];
      $desc=$row['desc'];
      $image=$row['image'];
      $short_desc=$row['short_desc'];
      echo "
  
    <div class='col-md-6'>
           <div class='home-news'>
           <a href='details.php?id=$id'>
            <img src='product-img/$image' style='height: 250px; width: 400px;'> </a>
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
       <a href='details.php?id=$id'> $desc <br> $short_desc</a>

         </p>
         <a href='details.php?id=$id'class='btn btn-primary'>Read More</a>
       </div>
    </div>
   
";

}
}

if(isset($_GET['watch_id'])){
    $watch_id=$_GET['watch_id'];


    $watch="SELECT * FROM `all_product` WHERE watch='$watch_id'";
    $run_sql=mysqli_query($db,$watch);
    $count=mysqli_num_rows($run_sql);
              if ($count==0) {
                echo "<h1 style='clear:both;'>No product found</h1>";
                
            
              }
              else{
                
   
    while ($rows=mysqli_fetch_array($run_sql)) {
      $watch_id=$rows['id'];
      $title=$rows['title'];
      $desc=$rows['desc'];
      $image=$rows['image'];
      $short_desc=$rows['short_desc'];
      echo "
  
    <div class='col-md-6'>
           <div class='home-news'>
            <img src='product-img/$image' style='height: 250px; width: 400px;'> 
           </div>
    </div> 
    <div class='col-md-6'>
       <div class='home-news-title'>
        <h2><a href='details.php?id=$id'>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        .</a></h2>
         <p>
       <a href='details.php?id=$id'> $desc <br> $short_desc  </a>

         </p>
         <a href='details.php?id=$id'class='btn btn-primary'>Read More</a>
       </div>
    </div>
   
";

      
    }
  

}
}

  }






 ?>


