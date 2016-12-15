<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class DeleteSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class DeleteSubscriber extends Request
{
    const END_POINT = "lists/{list_id}/members/{subscriber_hash}";

    public function __construct($listId, $subscriberEmail)
    {
        parent::__construct(HTTPMethod::DELETE, self::END_POINT, array(
            "list_id" => $listId,
            "subscriber_hash" => md5($subscriberEmail)
        ));
    }
}