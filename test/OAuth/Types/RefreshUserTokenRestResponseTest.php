<?php
namespace DTS\eBaySDK\Test\OAuth\Types;

use DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestResponse;

class RefreshUserTokenRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new RefreshUserTokenRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\OAuth\Types\RefreshUserTokenRestResponse', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }

    public function testProperties()
    {
        $this->obj->access_token = 'foo';
        $this->obj->token_type = 'bar';
        $this->obj->expires_in = 123;
        $this->obj->refresh_token = 'baz';
        $this->obj->error = 'foo';
        $this->obj->error_description = 'bar';
        $this->obj->error_uri = 'baz';

        $this->assertEquals('foo', $this->obj->access_token);
        $this->assertEquals('bar', $this->obj->token_type);
        $this->assertEquals(123, $this->obj->expires_in);
        $this->assertEquals('baz', $this->obj->refresh_token);
        $this->assertEquals('foo', $this->obj->error);
        $this->assertEquals('bar', $this->obj->error_description);
        $this->assertEquals('baz', $this->obj->error_uri);
    }
}
