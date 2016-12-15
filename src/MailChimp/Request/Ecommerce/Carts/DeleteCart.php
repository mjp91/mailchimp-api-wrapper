<?php namespace MailChimp\Request\Ecommerce\Carts;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class DeleteCart
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/
 * @package MailChimp\Request\Ecommerce\Carts
 */
class DeleteCart extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}";

    public function __construct($storeId, $cartId)
    {
        parent::__construct(HTTPMethod::DELETE, self::END_POINT, array("store_id" => $cartId, "cart_id" => $cartId));
    }
}