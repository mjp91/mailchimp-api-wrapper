<?php namespace MailChimp\Request\Subscribers;


use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Request;

class RetrieveSubscriber extends Request
{
    const END_POINT = 'lists/%s/members/%s';

    public function __construct($listId, $subscriberEmail)
    {
        $endPoint = sprintf(self::END_POINT, $listId, md5($subscriberEmail));
        parent::__construct(HTTPMethod::GET, $endPoint);
    }

    public function getRequestBody()
    {
        return null;
    }
}