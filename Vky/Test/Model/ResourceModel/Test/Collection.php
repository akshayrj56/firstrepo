<?php

namespace Vky\Test\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'cust_id';
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Vky\Test\Model\Test',
            'Vky\Test\Model\ResourceModel\Test'
        );
    }
}