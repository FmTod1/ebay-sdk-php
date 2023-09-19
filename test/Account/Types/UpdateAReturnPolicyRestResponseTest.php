<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Account\Types;

use DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse;

class UpdateAReturnPolicyRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new UpdateAReturnPolicyRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\UpdateAReturnPolicyRestResponse', $this->obj);
    }

    public function testExtendsSetReturnPolicyResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Account\Types\SetReturnPolicyResponse', $this->obj);
    }
}
