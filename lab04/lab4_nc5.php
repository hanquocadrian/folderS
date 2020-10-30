<pre><?php
function showArray($arr)
{
	echo "<table border='1'><tr><td>Index</td><td>Value</td></tr>";
	foreach($arr as $k=>$v)
	{
		echo "<tr><td>$k</td><td>$v</td></tr>";
	}	
	echo "</table><br>";
}

$a = array(6, 2, 7, 8, 5); 
$b = array("a"=>4, "b"=>2, "c"=>3, "d"=>8);
showArray($a);
showArray($b);
echo '<hr>';

function showArrayB2($arr){
	echo "<table border='1'><tr><td>Stt</td><td>Mã sản phẩm</td><td>Tên sản phẩm</td></tr>";
	$i=1;
	foreach($arr as $k=>$v)
	{
		?>
		<tr>
			<td><?php echo $i++ ?></td>
			<td><?php print_r ($arr[$k]["id"]); ?></td>
			<td><?php print_r ($arr[$k]["name"]); ?></td>
		</tr>
		<?php
	}	
	echo "</table><br>";
}

$arr=array();
$r = array("id"=>"sp1", "name"=>"sản phẩm 1");
$arr[] = $r;
$r = array("id"=>"sp2", "name"=>"sản phẩm 2");
$arr[] = $r;
$r = array("id"=>"sp3", "name"=>"sản phẩm 3");
$arr[] = $r;
//var_dump($arr);
showArrayB2($arr);
echo '<hr>';

$n= array(
"Câu 1",
"Câu 2",
"Câu 3",
"Câu 4",
"Câu 5",
"Câu 6",
"Câu 7",
"Câu 8",
"Câu 9",
"Câu 10"
);

var_dump($n);
$max = count($n)-1;
echo $max;
$num = rand(1,9);
echo $num;
if($num<count($n)){
	$m = array_rand($n,$num);
	echo "<table border='1'><tr><td>Index</td><td>Value</td></tr>";
	foreach($m as $k=>$v)
	{
		?>
		<tr>
			<td>câu</td>
			<td><?php print_r($n[$k]) ?></td>
		</tr>
		<?php
	}	
	echo "</table><br>";
}
?>