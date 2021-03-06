<?php namespace MailChimp\Request\Ecommerce\Carts\CartLines;

use MailChimp\Request\PatchRequest;

/**
 * Class UpdateCartLine
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/lines/
 * @package MailChimp\Request\Ecommerce\Carts\CartLines
 */
class UpdateCartLine extends PatchRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}/lines/{line_id}";

    /**
     * UpdateCartLine constructor.
     * @param string $storeId - the store's id
     * @param string $cartId - the cart's id
     * @param string $lineId - the line's id
     */
    public function __construct($storeId, $cartId, $lineId)
    {
        parent::__construct(self::END_POINT, array(
            "store_id" => $storeId,
            "cart_id" => $cartId,
            "line_id" => $lineId
        ));
    }
}