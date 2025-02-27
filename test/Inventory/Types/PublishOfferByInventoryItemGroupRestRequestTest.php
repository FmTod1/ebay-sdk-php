<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest;

class PublishOfferByInventoryItemGroupRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new PublishOfferByInventoryItemGroupRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\PublishOfferByInventoryItemGroupRestRequest', $this->obj);
    }

    public function testExtendsPublishByInventoryItemGroupRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\PublishByInventoryItemGroupRequest', $this->obj);
    }
}
