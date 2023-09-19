<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Marketing\Types;

use DTS\eBaySDK\Marketing\Types\BulkCreateAdsByListingIDRestResponse;

class BulkCreateAdsByListingIDRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new BulkCreateAdsByListingIDRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkCreateAdsByListingIDRestResponse', $this->obj);
    }

    public function testExtendsBulkAdResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Marketing\Types\BulkAdResponse', $this->obj);
    }
}
