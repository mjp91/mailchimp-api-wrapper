<?php namespace MailChimp\Request\Ecommerce\Carts;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class ReadCart
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/
 * @package MailChimp\Request\Ecommerce\Carts
 */
class ReadCart extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}";

    public function __construct($storeId, $cartId)
    {
        parent::__construct(HTTPMethod::GET, self::END_POINT, array("store_id" => $storeId, "cart_id" => $cartId));
    }
}