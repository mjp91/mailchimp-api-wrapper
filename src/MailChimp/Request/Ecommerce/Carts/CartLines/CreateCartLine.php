<?php namespace MailChimp\Request\Ecommerce\Carts\CartLines;

use MailChimp\Request\Request;

/**
 * Class CreateCartLine
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/lines/
 * @package MailChimp\Request\Ecommerce\Carts\CartLines
 */
class CreateCartLine extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}/lines";

    public function __construct($storeId, $cartId)
    {
        parent::__construct(HttpMethod::POST, self::END_POINT, array("store_id" => $storeId, "cart_id" => $cartId));
    }
}