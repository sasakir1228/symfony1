<?php
class MobileView extends sfPHPView {

	protected $objAgent;

	public function execute() {
		if (!$this->objAgent) {
			$this->objAgent = $this->getContext()->getRequest()->getAttribute('agent');
		}
		
		$objMobile = new MobileCheck();
		// store our current view
		$actionStackEntry = $this->getContext()->getActionStack()->getLastEntry();
		if (!$actionStackEntry->getViewInstance()) {
			$actionStackEntry->setViewInstance($this);
		}
		$default_sf_app_module_config_dir_name = sfConfig :: get('sf_app_module_config_dir_name');		
		$strAction = $this->getContext()->getRequest()->getParameter('action');	
		$strTemp = $this->viewName . ".php";		
		$strAddHeader = $objMobile->getUserAgent($this->objAgent);
		if (!$strAddHeader) {
			$strAddHeader = "pc";
		}
		if ($strAddHeader == "i") {
			header("Content-Type:text/xhtml+xml");
		}
		$strTemp =$strAddHeader . "/" . $strTemp;		
		$this->setTemplate($strTemp);
 	}
}

?>