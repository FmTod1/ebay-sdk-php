<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ReturnManagement\Types;

use DTS\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse;

class ProvideTrackingInfoResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new ProvideTrackingInfoResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\ProvideTrackingInfoResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\BaseResponse', $this->obj);
    }
}
