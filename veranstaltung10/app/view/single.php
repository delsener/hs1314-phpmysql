<?php 
	require_once( ROOT . '/app/model/single.php' );

	class singleView {
		
		private $singleModel;
		
		public function __construct( $singleModel ) {
			$this->singleModel = $singleModel;
		}
		
		public function printContent($withXmlHeader) {
			if ($withXmlHeader) {
				echo '<?xml version="1.0" encoding="utf-8"?>'.PHP_EOL;
			}
			$canton = $this->singleModel;
			echo '<canton id="'.$canton->getId().'">'.PHP_EOL;
			echo '<name>'.$canton->getName().'</name>'.PHP_EOL;
			echo '<hauptort>'.$canton->getHauptort().'</hauptort>'.PHP_EOL;
			echo '<einwohner>'.$canton->getEinwohner().'</einwohner>'.PHP_EOL;
			echo '<amtssprache>'.$canton->getAmtssprache().'</amtssprache>'.PHP_EOL;
			echo '</canton>'.PHP_EOL;
		}
	}
?>