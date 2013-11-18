<?php 

	class singleModel{

		private $id;
		private $name;
		private $hauptort;
		private $einwohner;
		private $amtssprache;
		
		public function __construct($id, $name, $hauptort, $einwohner, $amtssprache) {
			$this->id = $id;
			$this->name = $name;
			$this->hauptort = $hauptort;
			$this->einwohner = $einwohner;
			$this->amtssprache = $amtssprache;
		}
		
		public function getId() {
			return $this->id;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getHauptort() {
			return $this->hauptort;
		}
		
		public function getEinwohner() {
			return $this->einwohner;
		}
		
		public function getAmtssprache() {
			return $this->amtssprache;
		}
	
	}

 ?>