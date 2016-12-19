<?php namespace MailChimp\Request\Ecommerce\Carts;

use MailChimp\Request\PatchRequest;

/**
 * Class UpdateCart
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/
 * @package MailChimp\Request\Ecommerce\Carts
 */
class UpdateCart extends PatchRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}";

    /**
     * UpdateCart constructor.
     * @param string $storeId - the store's id
     * @param string $cartId - the cart's id
     */
    public function __construct($storeId, $cartId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "cart_id" => $cartId));
    }
}