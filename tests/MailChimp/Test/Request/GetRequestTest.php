<?php namespace MailChimp\Test\Request;

use MailChimp\Request\GetRequest;
use MailChimp\Request\Lists\Subscribers\ReadSubscriber;

class GetRequestTest extends \PHPUnit_Framework_TestCase
{
    const LIST_ID = "abc123";
    const EMAIL_ADDRESS = "test@example.com";

    /**
     * @var GetRequest $request
     */
    private $request;
    private $expectedEndPoint;

    protected function setUp()
    {
        $this->expectedEndPoint = "lists/" . self::LIST_ID . "/members/" . md5(self::EMAIL_ADDRESS);
        $this->request = new ReadSubscriber(self::LIST_ID, self::EMAIL_ADDRESS);
        $this->request->setQueryParameters(array("fields" => "id"));
    }

    public function testGetQueryParameters()
    {
        $queryParameters = $this->request->getQueryParameters();
        $this->assertTrue(is_array($queryParameters) && array_key_exists("fields", $queryParameters));
    }
}
