<?php

namespace Payment\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
            
		return new ViewModel();
	}
	
	public function addAction()
	{
		return new ViewModel();
	}
	
	public function editAction()
	{
		return new ViewModel();
	}
	
	public function deleteAction()
	{
		return new ViewModel();
	}
}