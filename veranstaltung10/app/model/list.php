<?php 

	require_once( ROOT . '/app/helper/canton_provider.class.php' );

	class listModel{

		private $sortProperty;
		
		public function __constructor() {
			$this->sortProperty = "Kanton"; // default sort property
		}
		
		public function setSortProperty($sortProperty) {
			$this->sortProperty = $sortProperty;
		}
		
		public function getCantons() {
			$provider = CantonProvider::getInstance();
			$cantons = $provider->getAllCantons();
			
			$sortColumn = $this->sortProperty;
			
			usort($cantons, function($a, $b) use($sortColumn) {
				return strcmp($a[$sortColumn],$b[$sortColumn]);
			});
			return $cantons;
		}
	
	}

 ?>