<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\ReturnManagement\Types;

use DTS\eBaySDK\ReturnManagement\Types\Amount;

class AmountTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new Amount();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\ReturnManagement\Types\Amount', $this->obj);
    }

    public function testExtendsDoubleType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\DoubleType', $this->obj);
    }
}
