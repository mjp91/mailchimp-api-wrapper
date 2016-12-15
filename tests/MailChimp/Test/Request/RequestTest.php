<?php namespace MailChimp\Test\Request;

use MailChimp\Constants\HTTPMethod;
use MailChimp\Request\Lists\Subscribers\ReadSubscriber;
use MailChimp\Request\Request;

class RequestTest extends \PHPUnit_Framework_TestCase
{
    const LIST_ID = "abc123";
    const EMAIL_ADDRESS = "test@example.com";
    
    /**
     * @var Request $request
     */
    private $request;
    private $expectedEndPoint;

    protected function setUp()
    {
        $this->expectedEndPoint = "lists/" . self::LIST_ID . "/members/" . md5(self::EMAIL_ADDRESS);
        $this->request = new ReadSubscriber("abc123", "test@example.com");
    }

    /**
     * Test the set HTTP method is valid
     */
    public function testGetHTTPMethod()
    {
        $this->assertTrue(in_array($this->request->getHttpMethod(), array(
            HTTPMethod::GET,
            HTTPMethod::POST,
            HTTPMethod::PUT,
            HTTPMethod::PATCH,
            HTTPMethod::DELETE
        )));
    }

    /**
     * Test the end point is set as expected
     */
    public function testGetEndPoint()
    {
        $this->assertEquals($this->request->getEndPoint(), $this->expectedEndPoint);
    }
}
