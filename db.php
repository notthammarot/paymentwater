<?php
$conn = mysqli_connect('localhost', 'root', '',"wbs");
if($conn){
	mysqli_set_charset($conn, "utf-8");

}else{
	echo "error connect to db" ;
}

date_default_timezone_set("Asia/Bangkok");
	?>
	
	

