<?php session_start(); ?>
<?php
  include 'db.php';
$owner_id =$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM owners WHERE id  = '$owner_id'");
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

$q = mysqli_query($conn,"select Prev from tempo_bill where Client = '$fname'");
$results = mysqli_fetch_array($q);
$previous = $results['Prev'];
?>

<p><h2>บันทึกข้อมูลน้ำประปา</h2></p>
 <h4>ชื่อ : <?php echo  $fname.'&nbsp;' .$lname;?> <br>บ้านเลขที่ : <?php echo $mi;?></h4>
<p><?php $date=date('y/m/d H:i:s');
 echo $date;?></p>
 <form method="post" action="addbill.php">
 <table width="346" border="1">
  <tr>
  <input type="hidden" name="owners_id" value="<?php echo $id; ?>" />
  <input type="hidden" name="date" value="<?php echo $date; ?>" />
    <td width="118">มาตรวัดน้ำก่อนหน้า:</td>
    <td width="66"><input type="text" name="prev"  value="<?php echo $previous; ?>" /></td>
    <td>ลบ.ม.</td>
  </tr>
  <tr>
    <td>มาตรวัดน้ำปัจจุบัน:</td>
    <td><input type="text" name="pres"  /></td>
    <td>ลบ.ม.</td>
  </tr>
  <tr>
    <td>ราคาต่อหน่วย</td></td>
    <td><input type="text" name="price" value="7"  /></td>
    <td>บาท</td>
  </tr>
   <tr>
    <td><input type="submit" name="total" value="บันทึกข้อมูล"  /></td>
  </tr>
</table>
</form>