<?php namespace MailChimp\Request\Ecommerce\Orders\OrderLines;

use MailChimp\Request\DeleteRequest;

/**
 * Class DeleteOrderLine
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/orders/lines/
 * @package MailChimp\Request\Ecommerce\Orders\OrderLines
 */
class DeleteOrderLine extends DeleteRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/orders/{order_id}/lines/{line_id}";

    /**
     * DeleteOrderLine constructor.
     * @param string $storeId - the store's id
     * @param string $orderId - the order's id
     * @param string $lineId - the line's id
     */
    public function __construct($storeId, $orderId, $lineId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "order_id" => $orderId, "line_id" => $lineId));
    }
}