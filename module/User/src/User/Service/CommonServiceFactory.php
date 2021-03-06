<?php

namespace User\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class CommonServiceFactory implements FactoryInterface {
	protected $controller;
	public function createService(ServiceLocatorInterface $services) {
		$serviceLocator = $services->getServiceLocator ();
		$dbAdapter = $serviceLocator->get ( 'Zend\Db\Adapter\Adapter' );
		
		$controller = new $this->controller ();
		$controller->setDbAdapter ( $dbAdapter );
		
		return $controller;
	}
	
	// setter controller
	public function setController($controller) {
		$this->controller = $controller;
	}
}
