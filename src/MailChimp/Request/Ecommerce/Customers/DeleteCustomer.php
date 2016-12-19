<?php namespace MailChimp\Request\Ecommerce\Customers;

use MailChimp\Request\DeleteRequest;

/**
 * Class DeleteCustomer
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/customers/
 * @package MailChimp\Request\Ecommerce\Customers
 */
class DeleteCustomer extends DeleteRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/customers/{customer_id}";

    /**
     * DeleteCustomer constructor.
     * @param string $storeId - the store's id
     * @param string $customerId - the customer's id
     */
    public function __construct($storeId, $customerId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "customer_id" => $customerId));
    }
}