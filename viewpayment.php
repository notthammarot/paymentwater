<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';
	
	}
?>
<?php
include 'db.php';
$id =$_REQUEST['id'];
$result = mysqli_query($conn,"SELECT * FROM bill where id='$id'");
while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $owners_id=$row['owners_id'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
	  $date=$row['date'];
 
  }

?>

<?php
  
include 'db.php';


$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owners_id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;

?>
<html>
<head><title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap/dist/css/bootstrap-theme.min.css" />
<script>
function printDiv(data) {
      var printContents = document.getElementById('data').innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
</head>
<body style=" background-size:cover; font-family:'Courier New', Courier;">
   <center> <img style="-webkit-user-select: none;margin: auto;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://scontent.fphs1-1.fna.fbcdn.net/v/t1.15752-9/275858847_3234346066798347_41646213308170789_n.png?_nc_cat=104&amp;ccb=1-5&amp;_nc_sid=ae9488&amp;_nc_eui2=AeH3w3Hawa_IRGIjo9naat69m0JHgBAqM--bQkeAECoz71vlBFX6_eSO2ZUOM9yM8-qBcckhDGAwfQHDYl8mNncb&amp;_nc_ohc=p6exzg6vEucAX8LUAeW&amp;tn=KbBUQl2hEMg_LKFq&amp;_nc_ht=scontent.fphs1-1.fna&amp;oh=03_AVJERvXQuunMQa04lHYlim4Hyp4-byHGfF3PhJM1HMQXcw&amp;oe=6265A4D3"></center>
<style type="text/css">
#data { margin: 0 auto; width:700px; padding:30px; border:#066 thin ridge; height:1050px; }

</style>
<div id="data">
<center>
<h4><center><b>____________________________________</b><br><b>Water Billing System of KhaoDin</b><br></center></h4>
<h4><p><strong>ใบเสร็จรับเงิน</strong></p></h4>
<p>ประปาหมู่บ้านเขาดิน หมู่ 3</p>
<p>ต.เขาเจ็ดลูก  อ.ทับคล้อ  จ.พิจิตร</p>

<p>โทร. 094 - 1920460</p>
<i style="text-align:right; margin-left:250px;">วันที่: <?php echo $date; ?></i>
</center>
<div id="container-fluid">
<table class="table table-striped table-bordered">
<tr><td>ชื่อ:</td><td><?php echo $fname; ?></td><td bordercolor="#000000">เลขที่มิเตอร์/บ้านเลขที่</td><td><?php echo $mi; ?></td></tr>
<tr><td>นามสกุล:</td><td><?php echo $lname; ?></i></b></td><td>รหัสผู้ใช้น้ำประปา</td><td><i>KHAODIN/00<?php echo $id; ?></i></td> </tr>

<tr><td>ที่อยู่: </td><td><?php echo $address; ?></td><td bordercolor="#000000">เบอร์ติดต่อ: </td><td><?php echo $contact; ?></td></tr>
<tr><td bordercolor="#000000">เลขมาตรน้ำครั้งก่อน :</td><td><b><?php echo $prev;?> </td><td bordercolor="#000000">เลขมาตรน้ำครั้งหลัง : </td><td><b><?php echo $pres; ?> </td></tr>
<tr><td bordercolor="#000000">หน่วยน้ำที่ใช้ : </td><td><b><?php echo $totalcons;?> </td><td bordercolor="#000000">ราคาต่อหน่วย : </td>
<td><b><?php echo $price; ?>&nbsp;บาท </td>
</tr>
<tr><td colspan="4"><center><h4>รวมเงินที่ต้องชำระ:<b><i> <?php echo $bill; ?><b><i> บาท</h4></center></td></tr>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM user where id= '$session'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>
<table class="table table-striped table-bordered">
<tr><td>เจ้าหน้าที่:<?php echo $sessionname;?></td><td>ลงชื่อ ____________________</td></tr>

<tr><td colspan="4"><center><u><h4>ช่องทางชำระเงิน</h4></u><i>พร้อมเพย์<br>ชื่อบัญชี : นายมาลี คงเมือง <br>เลขบัญชี : 0968622141<b></i>
<br><style="margin: 0px; background: #0e0e0e; height: 100%"><img style="-webkit-user-select: none;margin: auto;cursor: zoom-in;background-color: hsl(0, 0%, 90%);transition: background-color 300ms;" src="https://scontent.fphs1-1.fna.fbcdn.net/v/t1.15752-9/277300204_706981663815556_9137331578032140497_n.jpg?_nc_cat=109&amp;ccb=1-5&amp;_nc_sid=ae9488&amp;_nc_eui2=AeHJGvxp3s1pqJI4Ir2lwpLF-Oq88jZVMpr46rzyNlUymoNZFnQckX9j-aJxjaOY7AoLxbSiSvu_Jv-M43vU3NB2&amp;_nc_ohc=1VCdsewxRXMAX88ubHN&amp;tn=AJVa8jM_CrV0hDDi&amp;_nc_ht=scontent.fphs1-1.fna&amp;oh=03_AVJZ--x0BcZ1Nl3I5eKT2Nz3srbWVAuX69OOppb5h_FXlw&amp;oe=62685380" width="250" height="250">
</center><br>
</table>
<CENTER><button type="button"  class="btn btn-default " onClick="printDiv(data)"><span
class=" glyphicon glyphicon-print"></span>&nbsp;Print </button>&nbsp;<a href="bill.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Go back</button></a></CENTER>
<br></td></tr>



</div>
</div>
</body>

</html>
