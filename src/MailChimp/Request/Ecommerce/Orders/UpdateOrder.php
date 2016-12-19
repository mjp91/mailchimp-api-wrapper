<?php namespace MailChimp\Request\Ecommerce\Orders;

use MailChimp\Request\PatchRequest;

/**
 * Class UpdateOrder
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/orders/
 * @package MailChimp\Request\Ecommerce\Orders
 */
class UpdateOrder extends PatchRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/orders/{order_id}";

    /**
     * UpdateOrder constructor.
     * @param string $storeId - the store's id
     * @param string $orderId - the order's id
     */
    public function __construct($storeId, $orderId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "order_id" => $orderId));
    }
}