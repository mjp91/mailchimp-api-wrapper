<?php namespace MailChimp\Request\Ecommerce\Orders;

use MailChimp\Request\PostRequest;

/**
 * Class CreateOrder
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/orders/
 * @package MailChimp\Request\Ecommerce\Orders
 */
class CreateOrder extends PostRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/orders";

    /**
     * CreateOrder constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}