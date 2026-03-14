<?php
/**
 * Tests for NodemailerTrans
 */

use PHPUnit\Framework\TestCase;
use Nodemailertrans\Nodemailertrans;

class NodemailertransTest extends TestCase {
    private Nodemailertrans $instance;

    protected function setUp(): void {
        $this->instance = new Nodemailertrans(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodemailertrans::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
