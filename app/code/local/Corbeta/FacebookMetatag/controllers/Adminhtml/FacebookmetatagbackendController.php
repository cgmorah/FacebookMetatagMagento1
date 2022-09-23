<?php
class Corbeta_FacebookMetatag_Adminhtml_FacebookmetatagbackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('facebookmetatag/facebookmetatagbackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Facebook Metatag Verification"));
	   $this->renderLayout();
    }
}