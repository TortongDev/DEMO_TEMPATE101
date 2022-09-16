<?php 

	class Modelconfig {
		public $status;
		public $fname;
		
		public function __construct($status = 1 ,$fname){
			$this->status = $status; 
			$this->fname  = $fname; 
		}
		//
		
	}
?>