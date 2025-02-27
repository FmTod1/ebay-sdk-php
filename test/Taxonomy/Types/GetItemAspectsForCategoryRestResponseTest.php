<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Test\Taxonomy\Types;

use DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse;

class GetItemAspectsForCategoryRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetItemAspectsForCategoryRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\GetItemAspectsForCategoryRestResponse', $this->obj);
    }

    public function testExtendsAspectMetadata()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Taxonomy\Types\AspectMetadata', $this->obj);
    }
}
