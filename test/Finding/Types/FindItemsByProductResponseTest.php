<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Finding\Types;

use DTS\eBaySDK\Finding\Types\FindItemsByProductResponse;

class FindItemsByProductResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new FindItemsByProductResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\FindItemsByProductResponse', $this->obj);
    }

    public function testExtendsBaseFindingServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Finding\Types\BaseFindingServiceResponse', $this->obj);
    }
}
