
<?php
	require "../../conf/connection.php";
/*
	$end	=    5;  
	$page	= isset($_GET['page']) ? $_GET['page'] : '1';
	$start  = round(($page-1) * $end);

	$numrow  = db::select_limit("select * from usernameTest limit {$start} , {$end}");
	
	foreach($numrow as $r){
		echo $r['id'].' >'.$r['username'].'<br>';
	
	}
	
*/




//used Num Button
/*

$page	= isset($_GET['page']) ? $_GET['page'] : '1';
$limit  = db::select_pagination($page,5);
$limits = 5;


$numrow  = db::select_limit("select * from usernameTest limit {$limit} , {$limits}");
$sum = db::select_num_row("select * from usernameTest where status =  ?",array(2));

foreach($numrow as $value){
	echo $value['id'].':'.$value['username'];
	echo "<br>";
}
*/

//used upload
if(isset($_POST['submit'])){

		$size = db::size_file($_FILES["fileToUpload"]["size"]);
		$type = db::type_file($_FILES["fileToUpload"]["name"]);
		$file = db::movie_file($_FILES["fileToUpload"]["tmp_name"]);
	print_r($size);
	print_r($type);
}
?>


<form method="post" enctype="multipart/form-data">
	<input type="file" name="fileToUpload">
	<input type="submit" value="Upload Image" name="submit">
</form>
