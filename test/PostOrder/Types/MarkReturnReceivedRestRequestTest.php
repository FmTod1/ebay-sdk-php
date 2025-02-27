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

use DTS\eBaySDK\PostOrder\Types\MarkReturnReceivedRestRequest;

class MarkReturnReceivedRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new MarkReturnReceivedRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\MarkReturnReceivedRestRequest', $this->obj);
    }

    public function testExtendsMarkAsReceivedRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\MarkAsReceivedRequest', $this->obj);
    }
}
