<?php
$installer = $this;
/* @var $installer Mage_Sales_Model_Mysql4_Setup */

$installer->startSetup();

/**
 * Añadimos la columna admin_color_order para indicar el color a ese status de order.
 */

$installer->getConnection()->addColumn($this->getTable('sales/order_status'),'admin_color_order','varchar(6)');

$installer->endSetup();