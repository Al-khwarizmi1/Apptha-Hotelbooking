<?php
/**
 * @name         :  Apptha One Step Checkout
 * @version      :  1.7
 * @since        :  Magento 1.4
 * @author       :  Apptha - http://www.apptha.com
 * @copyright    :  Copyright (C) 2011 Powered by Apptha
 * @license      :  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @Creation Date:  June 20 2011
 * @Modified By  :  Bala G
 * @Modified Date:  August 1 2013
 *
 * */

class Apptha_OneStepCheckout_Block_Checkout_Cart_Sidebar extends Mage_Checkout_Block_Cart_Sidebar
{
   
    public function getCheckoutUrl()
    {
       if (!$this->helper('onestepcheckout')->isOnepageCheckoutLinksEnabled()){
            return parent::getCheckoutUrl();
        }
        return $this->getUrl('onestepcheckout', array('_secure'=>true));
    }
}
