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
<form action="delecex.php" method="post">
<h4>คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูล <br /></h4><h5><?php echo $fname; ?>&nbsp;&nbsp;<?php echo $lname; ?></h5>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>