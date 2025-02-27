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

use DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest;

class GetProductSearchValuesBulkRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetProductSearchValuesBulkRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBulkRequest', $this->obj);
    }

    public function testExtendsGetProductSearchValuesBaseRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ProductMetadata\Types\GetProductSearchValuesBaseRequest', $this->obj);
    }
}
