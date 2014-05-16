<?php
class WTC_AutoSku_Block_Adminhtml_Catalog_Product_Edit extends Mage_Adminhtml_Block_Catalog_Product_Edit
{
	public function __construct()
    {
        parent::__construct();
        $this->setTemplate('autosku/edit.phtml');
        $this->setId('product_edit');
    }
}
			
