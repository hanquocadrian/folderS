<pre><?php
$a = array(1, -3, 5); //mảng có 3 phần tử
$b = array("a"=>2, "b"=>4, "c"=>-6);//mảng có 3 phần tử.Các index của mảng là chuỗi
?>
vd a: Đếm số phần tử có giá trị dương trong mảng a:
<?php 
	$c=0;
	foreach($a as $v){
		if($v>0)
			$c++;
	}
	echo " $c<br>";
?>

vd b: các số dương trong b:
<?php
	$vdnb=array();
	foreach($b as $v){
		if($v>0)
			$vdnb[]=$v;
	}
	print_r($vdnb);
?>

Nội dung giá trị mảng a :
<?php
foreach($a as $value)
{
	echo $value ." ";	
}
?>
<br> Nôi dung mảng a (key-value) 
<?php
foreach($a as $key=>$value)
{
	echo "($key - $value )";	
}
?>
<br /> Nội dung mảng b: (key - value):
<?php
foreach($b as $k=>$v)
{
	echo "($k - $v) ";	
}
?>
<br />Hiển thị nội dung mảng b ra dạng bảng:
<table border=1>
	<tr>
		<td>STT</td>
		<td>Key</td>
		<td>Value</td>
	</tr>
    <?php
	$i=0;
	foreach($b as $k=>$v)
	{	$i++;
		echo "<tr><td>$i</td>";
		echo "<td>$k</td>";
		echo "<td>$v</td></tr>";
	}
	?>
</table>