<?php 
$db=mysqli_connect('localhost','technolo_samip','Samip100$','technolo_news');

if($db==true){
	echo "<script>Database connection successfull</script>";
}
else{
	"<script>Database not connection</script>";}

function newsCat(){

	global $db;
	$sql="select * from news_categories";
	$run_sql=mysqli_query($db,$sql);
	if ($run_sql==true) {
		echo "echo <script>Database connection successfull</script>";
	}
	else{
		echo " failled". $sql . "<br>" . $con->error;
	}


}

 ?>