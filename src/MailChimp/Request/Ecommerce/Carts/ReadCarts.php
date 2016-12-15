<?php namespace MailChimp\Request\Ecommerce\Carts;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class ReadCarts
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/
 * @package MailChimp\Request\Ecommerce\Carts
 */
class ReadCarts extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/carts";

    public function __construct($storeId)
    {
        parent::__construct(HTTPMethod::GET, self::END_POINT, array("store_id" => $storeId));
    }
}