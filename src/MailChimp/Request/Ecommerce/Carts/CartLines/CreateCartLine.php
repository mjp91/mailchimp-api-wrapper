<?php namespace MailChimp\Request\Ecommerce\Carts\CartLines;

use MailChimp\Request\PostRequest;

/**
 * Class CreateCartLine
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/lines/
 * @package MailChimp\Request\Ecommerce\Carts\CartLines
 */
class CreateCartLine extends PostRequest
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}/lines";

    /**
     * CreateCartLine constructor.
     * @param string $storeId - the store's id
     * @param string $cartId - the cart's id
     */
    public function __construct($storeId, $cartId)
    {
        parent::__construct(self::END_POINT, array("store_id" => $storeId, "cart_id" => $cartId));
    }
}