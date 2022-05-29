<?php

namespace Marcgento\Test\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
 
    public function execute()
    {        
        /*
        $this->validaError();
        $resultPage = $this->resultPageFactory->create();
        return $resultPage;
        */
        $this->_view->loadLayout();
	    $this->_view->renderLayout();
    }
}