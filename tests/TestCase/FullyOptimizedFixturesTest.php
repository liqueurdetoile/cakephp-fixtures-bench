<?php
namespace App\Test\TestCase;

use App\TestSuite\TestCase;

class FullyOptimizedFixturesTest extends TestCase
{
    public $fixtures = ['app.Users'];

    public function getFixturesList(): array
    {
        $pattern = [];

        for ($i=0; $i < 100; $i++) {
            if ($i < 70) {
                $pattern[] = [];
            } else {
                $pattern[] = [
                  ['app.Deployments']
                ];
            }
        }

        return $pattern;
    }

    /** @dataProvider getFixturesList */
    public function testFixturesLoading(?array $fixtures = []): void
    {
        call_user_func_array(array($this, 'loadFixtures'), $fixtures);
        $this->assertTrue(true);
    }
}
