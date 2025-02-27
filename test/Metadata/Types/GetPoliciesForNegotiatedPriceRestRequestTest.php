<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Metadata\Types;

use DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest;

class GetPoliciesForNegotiatedPriceRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetPoliciesForNegotiatedPriceRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Metadata\Types\GetPoliciesForNegotiatedPriceRestRequest', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
