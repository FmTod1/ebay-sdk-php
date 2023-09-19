<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ProductMetadata\Types;

use DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest;

class GetCompatibilitySearchValuesBulkRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetCompatibilitySearchValuesBulkRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetCompatibilitySearchValuesBulkRequest', $this->obj);
    }

    public function testExtendsGetProductSearchValuesBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }
}
