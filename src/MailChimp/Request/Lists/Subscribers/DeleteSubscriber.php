<?php namespace MailChimp\Request\Lists\Subscribers;

use MailChimp\Request\DeleteRequest;

/**
 * Class DeleteSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class DeleteSubscriber extends DeleteRequest
{
    const END_POINT = "lists/{list_id}/members/{subscriber_hash}";

    /**
     * DeleteSubscriber constructor.
     * @param string $listId - the list's id
     * @param string $subscriberEmail - the subscriber's email address
     */
    public function __construct($listId, $subscriberEmail)
    {
        parent::__construct(self::END_POINT, array(
            "list_id" => $listId,
            "subscriber_hash" => md5($subscriberEmail)
        ));
    }
}