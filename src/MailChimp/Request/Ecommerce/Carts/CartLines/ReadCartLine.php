<?php namespace MailChimp\Request\Ecommerce\Carts\CartLines;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class ReadCartLine
 * @see https://developer.mailchimp.com/documentation/mailchimp/reference/ecommerce/stores/carts/lines/
 * @package MailChimp\Request\Ecommerce\Carts\CartLines
 */
class ReadCartLine extends Request
{
    const END_POINT = "ecommerce/stores/{store_id}/carts/{cart_id}/lines/{line_id}";

    public function __construct($storeId, $cartId, $lineId)
    {
        parent::__construct(HTTPMethod::GET, self::END_POINT, array(
            "store_id" => $storeId,
            "cart_id" => $cartId,
            "line_id" => $lineId
        ));
    }
}