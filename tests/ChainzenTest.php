<?php
/**
 * Tests for ChainZen
 */

use PHPUnit\Framework\TestCase;
use Chainzen\Chainzen;

class ChainzenTest extends TestCase {
    private Chainzen $instance;

    protected function setUp(): void {
        $this->instance = new Chainzen(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Chainzen::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
