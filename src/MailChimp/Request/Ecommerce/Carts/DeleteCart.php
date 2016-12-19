<?php namespace MailChimp\Request\Ecommerce\Carts;

use MailChimp\Request\DeleteRequest;

/**
 * Class DeleteCart
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/
 * @package MailChimp\Request\Ecommerce\Carts
 */
class DeleteCart extends DeleteRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}";

    /**
     * DeleteCart constructor.
     * @param string $storeId - the store's id
     * @param string $cartId - the cart's id
     */
    public function __construct($storeId, $cartId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $cartId, "cart_id" => $cartId));
    }
}