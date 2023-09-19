<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\HalfFinding\Types;

use DTS\eBaySDK\HalfFinding\Types\ProductIDType;

class ProductIDTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new ProductIDType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\HalfFinding\Types\ProductIDType', $this->obj);
    }

    public function testExtendsStringType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\StringType', $this->obj);
    }
}
