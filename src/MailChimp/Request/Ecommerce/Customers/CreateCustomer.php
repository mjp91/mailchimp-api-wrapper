<?php namespace MailChimp\Request\Ecommerce\Customers;

use MailChimp\Request\PostRequest;

/**
 * Class CreateCustomer
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/customers/
 * @package MailChimp\Request\Ecommerce\Customers
 */
class CreateCustomer extends PostRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/customers";

    /**
     * CreateCustomer constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}