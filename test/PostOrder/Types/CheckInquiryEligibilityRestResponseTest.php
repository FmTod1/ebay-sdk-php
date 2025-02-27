<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CheckInquiryEligibilityRestResponse;

class CheckInquiryEligibilityRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new CheckInquiryEligibilityRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckInquiryEligibilityRestResponse', $this->obj);
    }

    public function testExtendsCheckInquiryEligibilityResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckInquiryEligibilityResponse', $this->obj);
    }
}
