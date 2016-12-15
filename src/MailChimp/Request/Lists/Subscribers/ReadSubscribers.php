<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class ReadSubscribers
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class ReadSubscribers extends Request
{
    const END_POINT = "lists/{list_id}/members";

    public function __construct($listId)
    {
        parent::__construct(HTTPMethod::GET, self::END_POINT, array("list_id" => $listId));
    }
}