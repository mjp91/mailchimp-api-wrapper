<?php namespace MailChimp\Request\Subscribers;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

/**
 * Class ReadSubscriber
 * @see http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/
 * @package MailChimp\Request\Subscribers
 */
class ReadSubscriber extends Request
{
    const END_POINT = 'lists/%s/members/%s';

    public function __construct($listId, $subscriberEmail)
    {
        $endPoint = sprintf(self::END_POINT, $listId, md5($subscriberEmail));
        parent::__construct(HTTPMethod::GET, $endPoint);
    }
}