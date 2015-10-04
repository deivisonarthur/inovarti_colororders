<?php

class Inovarti_ColorOrders_Block_Adminhtml_Block_Grid extends Mage_Core_Block_Template
{

	/**
	 * Devuelve un array json con status -color
	 * @return json array status - color
	 */
	public function getColorStatuses()
    {
        $statusCollection = Mage::getModel('sales/order_status')->getCollection()->addFieldToSelect('label')->addFieldToSelect('admin_color_order');

		$statusArr = $statusCollection->toArray();

		$statusColors = $statusArr['items'];

		for($i=0; $i<count($statusColors); $i++){
			$colors[$statusColors[$i]['label']] = $statusColors[$i]['admin_color_order'];
		}

		return json_encode($colors);
    }
}