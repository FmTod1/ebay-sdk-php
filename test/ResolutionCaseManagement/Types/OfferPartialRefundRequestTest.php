<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ResolutionCaseManagement\Types;

use DTS\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest;

class OfferPartialRefundRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new OfferPartialRefundRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\OfferPartialRefundRequest', $this->obj);
    }

    public function testExtendsBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\BaseRequest', $this->obj);
    }
}
