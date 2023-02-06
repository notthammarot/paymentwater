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

?>

<p><h2>แก้ไขข้อมูลสมาชิก</h2></p>
  <form method="post" action="editecex.php">
<table width="342" border="0">
  <tr>
    <td width="107">รหัสผู้ใช้:</td>
    <td width="315"><input type="text" name="id" value="<?php echo $id; ?>" /></td>
  </tr>
  <tr>
    <td>ชื่อ:</td>
    <td><input type="text" name="fname"value="<?php echo $fname; ?>" /></td>
    </tr>
  <tr>
    <td>นามสกุล:</td>
    <td><input type="text" name="lname" value="<?php echo $lname; ?>"/></td>
    </tr>
   
    <tr>
    <td>บ้านเลขที่:</td>
    <td><input type="text" name="mi" value="<?php echo $mi; ?>"/></td>
 
  </tr>
  <tr>
    <td>ที่อยุ่:</td>
    <td><input type="text" name="address" value="<?php echo $address; ?>" /></td>
  
  </tr>
  <tr>
  <td>เบอร์ติดต่อ:</td>
    <td><input type="text" name="contact" value="<?php echo $contact; ?>"/></td></tr>
 <tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="แก้ไข"  /></td>
	</tr>
</table>