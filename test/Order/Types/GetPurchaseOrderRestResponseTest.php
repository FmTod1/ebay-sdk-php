<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Order\Types;

use DTS\eBaySDK\Order\Types\GetPurchaseOrderRestResponse;

class GetPurchaseOrderRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetPurchaseOrderRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\GetPurchaseOrderRestResponse', $this->obj);
    }

    public function testExtendsPurchaseOrder()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Order\Types\PurchaseOrder', $this->obj);
    }
}
