<?php 
	require_once( ROOT . '/app/model/list.php' );
	require_once( ROOT . '/app/model/single.php' );

	class listView {
		
		private $listModel;
		
		public function __construct( $request ) {
			$this->listModel = $request;
		}
		
		public function printContent() {
			echo '<?xml version="1.0" encoding="utf-8"?>'.PHP_EOL;
			echo '<cantons>'.PHP_EOL;
			
			$cantons = $this->listModel->getCantons();
			foreach($cantons as $canton){
				$model = new singleModel($canton['ID'], $canton['Kanton'], $canton['Hauptort'], $canton['Einwohner'], $canton['Amtssprache']);
				$singleView = new singleView($model);
				$singleView->printContent(false);
			}
			
			echo '</cantons>';
		}
	}
?>