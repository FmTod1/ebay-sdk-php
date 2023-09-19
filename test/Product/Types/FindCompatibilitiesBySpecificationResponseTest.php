<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Product\Types;

use DTS\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse;

class FindCompatibilitiesBySpecificationResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new FindCompatibilitiesBySpecificationResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\FindCompatibilitiesBySpecificationResponse', $this->obj);
    }

    public function testExtendsBaseServiceResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Product\Types\BaseServiceResponse', $this->obj);
    }
}
