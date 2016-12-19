<?php namespace MailChimp\Request\Ecommerce\Orders\OrderLines;

use MailChimp\Request\PostRequest;

/**
 * Class CreateOrderLine
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/orders/lines/
 * @package MailChimp\Request\Ecommerce\Orders\OrderLines
 */
class CreateOrderLine extends PostRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/orders/{order_id}/lines";

    /**
     * CreateOrderLine constructor.
     * @param string $storeId - the store's id
     * @param string $orderId - the order's id
     */
    public function __construct($storeId, $orderId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "order_id" => $orderId));
    }
}