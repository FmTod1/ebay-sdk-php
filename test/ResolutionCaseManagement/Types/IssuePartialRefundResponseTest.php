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

use DTS\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse;

class IssuePartialRefundResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new IssuePartialRefundResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\IssuePartialRefundResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ResolutionCaseManagement\Types\BaseResponse', $this->obj);
    }
}
