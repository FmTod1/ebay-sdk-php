<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Trading\Enums;

use DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType;

class VariationPictureRuleCodeTypeTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new VariationPictureRuleCodeType();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Enums\VariationPictureRuleCodeType', $this->obj);
    }
}
