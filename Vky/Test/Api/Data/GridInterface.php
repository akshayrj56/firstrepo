<?php

namespace Vky\Test\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const CUST_ID = 'cust_id';
    const NAME = 'name';
    const CONTACT = 'contact';

    /**
     * Get CustId.
     *
     * @return int
     */
    public function getCustId();

    /**
     * Set CustId.
     */
    public function setCustId($custId);

    /**
     * Get Name.
     *
     * @return varchar
     */
    public function getName();

    /**
     * Set Name.
     */
    public function setName($name);

    /**
     * Get Contact.
     *
     * @return varchar
     */
    public function getContact();

    /**
     * Set Contact.
     */
    public function setContact($contact);

    
}