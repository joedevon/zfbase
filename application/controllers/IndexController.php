<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $obj = new Model_Hello();
        $this->view->hello = $obj->helloWorld();
    }

	public function signInAction()
	{
		$form = new Form_Login();
    	$this->view->form = $form;
	}
}

