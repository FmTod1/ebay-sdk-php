<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Types;

use DTS\eBaySDK\Trading\Types\GetBidderListRequestType;

class GetBidderListRequestTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetBidderListRequestType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\GetBidderListRequestType', $this->obj);
    }

    public function testExtendsAbstractRequestType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\AbstractRequestType', $this->obj);
    }
}
