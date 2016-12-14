<?php namespace MailChimp\Request\Subscribers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class CreateSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class CreateSubscriber extends Request
{
    const END_POINT = "lists/%s/members";

    public function __construct($listId)
    {
        $endPoint = sprintf(self::END_POINT, $listId);
        parent::__construct(HTTPMethod::POST, $endPoint);
    }
}