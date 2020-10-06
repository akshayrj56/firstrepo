<?php

namespace Vky\Test\Model\ResourceModel;


class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * @var string
     */
    protected $_idFieldName = 'cust_id';
    /**
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('customer_details', 'cust_id');   //here "customer_details" is table name and "cust_id" is the primary key of custom table
    }
}