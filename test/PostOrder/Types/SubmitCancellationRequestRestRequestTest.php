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

use DTS\eBaySDK\PostOrder\Types\SubmitCancellationRequestRestRequest;

class SubmitCancellationRequestRestRequestTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new SubmitCancellationRequestRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\SubmitCancellationRequestRestRequest', $this->obj);
    }

    public function testExtendsCreateCancelRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\CreateCancelRequest', $this->obj);
    }
}
