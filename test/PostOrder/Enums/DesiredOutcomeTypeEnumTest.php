<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Enums;

use DTS\eBaySDK\PostOrder\Enums\DesiredOutcomeTypeEnum;

class DesiredOutcomeTypeEnumTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new DesiredOutcomeTypeEnum();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Enums\DesiredOutcomeTypeEnum', $this->obj);
    }
}
