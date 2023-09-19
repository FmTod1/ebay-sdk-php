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

use DTS\eBaySDK\PostOrder\Types\CloseCaseRestRequest;

class CloseCaseRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new CloseCaseRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CloseCaseRestRequest', $this->obj);
    }

    public function testExtendsBuyerCloseCaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\BuyerCloseCaseRequest', $this->obj);
    }
}
