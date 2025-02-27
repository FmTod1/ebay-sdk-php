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

use DTS\eBaySDK\Inventory\Types\CreateOfferRestResponse;

class CreateOfferRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new CreateOfferRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\CreateOfferRestResponse', $this->obj);
    }

    public function testExtendsOfferResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\OfferResponse', $this->obj);
    }
}
