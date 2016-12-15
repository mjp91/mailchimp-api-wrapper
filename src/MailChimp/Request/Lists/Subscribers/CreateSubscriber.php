<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class CreateSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class CreateSubscriber extends Request
{
    const END_POINT = "lists/{list_id}/members";

    public function __construct($listId)
    {
        parent::__construct(HTTPMethod::POST, self::END_POINT, array("list_id" => $listId));
    }
}