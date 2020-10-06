<?php
namespace Vky\Test\Model;

use Vky\Test\Api\Data\GridInterface;

use Magento\Framework\Model\AbstractModel;

class Test extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'customer_details';
 
    /**
     * @var string
     */
    protected $_cacheTag = 'customer_details';
 
    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'customer_details';
 
    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Vky\Test\Model\ResourceModel\Test');
    }
    /**
     * Get CustId.
     *
     * @return int
     */
    public function getCustId()
    {
        return $this->getData(self::CUST_ID);
    }
 
    /**
     * Set CustId.
     */
    public function setCustId($cust_id)
    {
        return $this->setData(self::CUST_ID, $cust_id);
    }
 
    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }
 
    /**
     * Set Name.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }
 
    /**
     * Get Contact.
     *
     * @return varchar
     */
    public function getContact()
    {
        return $this->getData(self::CONTACT);
    }
 
    /**
     * Set Contact.
     */
    public function setContact($contact)
    {
        return $this->setData(self::CONTACT, $contact);
    }
 
}