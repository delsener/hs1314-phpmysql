<?php 
	
	require_once( ROOT . '/app/model/list.php' );
	require_once( ROOT . '/app/model/single.php' );
	require_once( ROOT . '/app/view/list.php' );
	require_once( ROOT . '/app/view/single.php' );
	require_once( ROOT . '/app/helper/canton_provider.class.php' );

	class cantonsController{
		
		private $request;
		private $viewFile;
		
		public function __construct( $request ) {
		
		
			$this->request = $request;
			
			
			$methodName = $this->request->getMethod().'Method';
			if( ! method_exists( $this, $methodName )){
				die('<span style="color: red">Method '.$actionName.' not found!!</span>');
			}
			
			$this->{$methodName}();
			
			
			
		}
		
		public function listMethod(){
			// create model
			$listModel = new listModel();
			
			// sort column
			$sortProperty = $this->request->getParam('sort');
			if (isset($sortProperty)) {
				$listModel->setSortProperty($sortProperty);
			}
			
			$listView = new listView($listModel);
			
			$listView->printContent();
		}
		
		public function singleMethod() {
			// get id and canton
			$id = $this->request->getParam('id');
			
			$provider = CantonProvider::getInstance();
			$canton = $provider->getById($id);
			if ($canton == null) {
				die('<span style="color: red">Canton '.$id.' not found!!</span>');
			}
			
			$model = new singleModel($canton['ID'], $canton['Kanton'], $canton['Hauptort'], $canton['Einwohner'], $canton['Amtssprache']);
			$singleView = new singleView($model);
			$singleView->printContent(true);
		}
		
		
	
	}

 ?>