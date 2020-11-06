<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lab5_1</title>
</head>

<body>
<?php
echo "REQUEST:";
print_r($_REQUEST);
echo "<hr>POST<br>";
print_r($_POST);

?>
<fieldset>
<legend>Form 3</legend>
<?php 
	$ten = isset($_POST['ten'])?$_POST['ten']:"";
	$gt = isset($_POST['gt'])?$_POST['gt']:'';
	$st[] = isset($_POST['st'])?$_POST['st']:'';
?>
<form action="lab5_5_1.php" method="post">
Nhập tên:<input type="text" name="ten" value="<?php echo $ten ?>"><br>
giới tính:<input type="radio" name="gt" value="1" <?php if($gt==1) echo 'checked'?>>Nam
		  <input type="radio" name="gt" value="0" <?php if($gt==0) echo 'checked'?>>Nữ<br>
Sở Thích:<input type="checkbox" name="st[]" value="tt" <?php if(in_array('tt',$st)) echo 'checked' ?>>Thể Thao
		<input type="checkbox" name="st[]" value="dl">Du Lịch
		<input type="checkbox" name="st[]" value="game">Game<br>
<input type="submit" >
</form>
</fieldset>
</body>
</html>