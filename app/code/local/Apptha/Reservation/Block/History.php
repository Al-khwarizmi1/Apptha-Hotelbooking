<?php
/**
 * @ Author     : Apptha team
 * @copyright   : Copyright (c) 2011 (www.apptha.com)
 * @license     : http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Apptha_Reservation_Block_History extends Mage_Core_Block_Template
{

    public function orderStatus($orderid)
    {
        $order = Mage::getModel('sales/order')->load($orderId);

        


    }


}
