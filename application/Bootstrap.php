<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initAutoloadModuleAdmin()
	{
		$autoloader = new Zend_Application_Module_Autoloader(array(
							'namespace' => 'Admin',
							'basePath' => APPLICATION_PATH.'/modules/admin',
		));
		return $autoloader;
	}

	protected function _initAutoloadModuleDefault()
	{
		$autoloader = new Zend_Application_Module_Autoloader(array(
			'namespace' => '',
			'basePath' => dirname(__FILE__)
		));
		return $autoloader;
	}

	protected function _initLayoutHelper()
	{
		$this->bootstrap('frontController');
		$layout = Zend_Controller_Action_HelperBroker::addHelper(
		new Amz_Controller_Action_Helper_LayoutLoader());
	}
}