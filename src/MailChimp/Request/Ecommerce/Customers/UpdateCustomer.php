<?php namespace MailChimp\Request\Ecommerce\Customers;

use MailChimp\Request\Request;

class UpdateCustomer extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/customers/{customer_id}";

    /**
     * UpdateCustomer constructor.
     * @param string $httpMethod - the HTTP method to use PUT|PATCH
     * @param string $storeId - the store's id
     * @param string $customerId - the customer's id
     */
    public function __construct($httpMethod, $storeId, $customerId)
    {
        parent::__construct($httpMethod, self::END_POINT, array("store_id" => $storeId, "customer_id" => $customerId));
    }
}