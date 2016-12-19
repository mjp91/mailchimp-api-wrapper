<?php namespace MailChimp\Request\Ecommerce\Orders;

use MailChimp\Request\GetRequest;

/**
 * Class ReadOrders
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/orders/
 * @package MailChimp\Request\Ecommerce\Orders
 */
class ReadOrders extends GetRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/orders";

    /**
     * ReadOrders constructor.
     * @param string $storeId - the store's id
     */
    public function __construct($storeId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId));
    }
}