<?php

class Admin_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $obj = new Admin_Model_Test();
        $this->view->hello = $obj->helloWorld();
    }

    public function loginAction()
    {
    	$form = new Admin_Form_Login();
    	$this->view->form = $form;
    }

}

