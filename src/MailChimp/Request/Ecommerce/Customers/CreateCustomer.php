<?php namespace MailChimp\Request\Ecommerce\Customers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class CreateCustomer
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/customers/
 * @package MailChimp\Request\Ecommerce\Customers
 */
class CreateCustomer extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/customers";

    public function __construct($storeId)
    {
        parent::__construct(HTTPMethod::POST, self::END_POINT, array("store_id" => $storeId));
    }
}