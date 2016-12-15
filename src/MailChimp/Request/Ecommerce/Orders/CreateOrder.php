<?php namespace MailChimp\Request\Ecommerce\Orders;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class CreateOrder
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/orders/
 * @package MailChimp\Request\Ecommerce\Orders
 */
class CreateOrder extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/orders";

    public function __construct($storeId)
    {
        parent::__construct(HTTPMethod::POST, self::END_POINT, array("store_id" => $storeId));
    }
}