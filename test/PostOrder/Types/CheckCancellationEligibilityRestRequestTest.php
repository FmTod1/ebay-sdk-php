<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\CheckCancellationEligibilityRestRequest;

class CheckCancellationEligibilityRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new CheckCancellationEligibilityRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CheckCancellationEligibilityRestRequest', $this->obj);
    }

    public function testExtendsOrderEligibilityCheckInfo()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\OrderEligibilityCheckInfo', $this->obj);
    }
}
