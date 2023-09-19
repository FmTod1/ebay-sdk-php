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

use DTS\eBaySDK\PostOrder\Types\GetReturnRulesRestResponse;

class GetReturnRulesRestResponseTest extends \PHPUnit\Framework\TestCase
{
    private $obj;

    protected function setUp(): void
    {
        parent::setUp();

        $this->obj = new GetReturnRulesRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetReturnRulesRestResponse', $this->obj);
    }

    public function testExtendsGetDispositionRulesResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\GetDispositionRulesResponse', $this->obj);
    }
}
