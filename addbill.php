<?php
include 'db.php';
	
	$owners_id = $_POST['owners_id'];
	$prev = $_POST['prev'];
	$pres = $_POST['pres'];
	$totalcons = $pres - $prev;
	$price = $_POST['price'];
	$pricetotal =  $price ;
	$date=$_POST['date'] ;
	

	mysqli_query($conn,"INSERT INTO  bill (owners_id,prev,pres,price,date) 
		 VALUES ('$owners_id','$prev','$pres','$pricetotal','$date')"); 
		 
	mysqli_query($conn,"UPDATE tempo_bill SET Prev = '$pres' where id ='$owners_id'");
				
				echo '<script>alert("บันทึกข้อมูลเสร็จสิ้น ไปที่ปุ่ม เรียกดู เพื่อตรวจสอบข้อมูลและปริ้นใบชำระเงิน")</script>';
				echo '<script>windows: location="bill.php"</script>';
?>	