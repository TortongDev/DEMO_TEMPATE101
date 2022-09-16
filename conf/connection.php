<?php 

 class db {
		public  $_hostname  = "localhost";
		public  $_username  = "root";
		public  $_password  = "";
		public  $_database  = "db_model";
		public static $conn;

		public  function __construct(){
			self::$conn =  $this->connection();
			
		}
		public  function connection(){
			try{
				$conn = new PDO("mysql:host=$this->_hostname;dbname=$this->_database;",$this->_username,$this->_password);
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				//echo "success connection";

			}catch(PDOException $err){
				echo $err->getMessage();
			}
				return $conn;			
		}
		public static function insertt($sql,$value){
			$inserts = self::$conn->prepare($sql);
			$inserts->execute($value);
		}
		public static function updatee($sql,$value){
			$inserts = self::$conn->prepare($sql);
			$inserts->execute($value);
		}
		public static function deletee($sql,$value){
			$inserts = self::$conn->prepare($sql);
			$inserts->execute($value);
		}
		
		public static function select($sql,$param){	
			$select = self::$conn->prepare($sql);
			$select->execute($param);
			return $select->fetchAll();
			
		}
		public static function selectAll($sql){	
			$select = self::$conn->query($sql);
			$select->execute();
			return $select->fetchAll();	
		}
		
		
		
		public static function select_num_row($sql,$param){	
			$select = self::$conn->prepare($sql);
			$select->execute($param);
			$row	=	$select->rowCount();
			return $row;
			
		}
		public static function getJson($sql,$param){
			//include("header("Content-Type: application/json; charset=UTF-8");");			
			$select = self::$conn->prepare($sql);
			$select->execute($param);
			while($r_all = $select->fetchAll()){
				$arrJSON = array(
				'status' 	=> true,
				'res'		=> $r_all
				);
				
			}
			echo json_encode($arrJSON);
			
		}
		
		public static $allrow ,$param_page ,$sumPage ,$limit_start,$limit_end;
  
		public static function select_limit($sql){
			$select = self::$conn->query($sql);
			$select->execute();
			return $select->fetchAll();
			
		}		
		public static function select_pagination($page_param,$limit_end=7){
			$page	= $page_param;
			self::$limit_end = $limit_end;
			$limit_start  = round(($page-1)*$limit_end);

			return self::$limit_start = $limit_start;
			
		}
		
		public static $imageFileType,$status_size,$uploadOk,$file_name,$target_file;
		
		public static function type_file($fileToUpload = ''){
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($fileToUpload);
			self::$target_file = $target_file;
			self::$file_name = $fileToUpload;
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			return self::$imageFileType = $imageFileType;
		}
		public static function size_file($fileToUpload){
			if ($fileToUpload > 500000) {
				$status_size = 0;
				$uploadOk = 0;
				self::$uploadOk = $uploadOk;
			}else{
				
				$status_size = 1;
				
			}			
			return $status_size;

		}
		public static function type_img(){
			$imageFileType = $this->imageFileType;
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
				self::$uploadOk = $uploadOk;
			}
		}
		
		
		//$_FILES["fileToUpload"]["tmp_name"]
		public  static function movie_file($fileToUpload){
		
			  if (move_uploaded_file($fileToUpload, self::$target_file)) {
				echo "The file ". htmlspecialchars( basename(self::$file_name)). " has been uploaded.";
			  } else {
				echo "Sorry, there was an error uploading your file.";
			  }
			
		}
		/*
	$end	=    5;  
	$page	= isset($_GET['page']) ? $_GET['page'] : '1';
	$start  = round(($page-1) * $end);

	$numrow  = db::select_limit("select * from usernameTest limit {$start} , {$end}");
	
	foreach($numrow as $r){
		echo $r['id'].' >'.$r['username'].'<br>';
	
	}
	
*/
 }
 $obj = new db;

?>

