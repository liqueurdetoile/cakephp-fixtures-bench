<?php
namespace App\Test\TestCase;

use Cake\TestSuite\TestCase;

class HalfOptimizedFixturesTest extends TestCase
{
    public $autoFixtures = false;
    public $fixtures = ['app.Users', 'app.Deployments', 'app.Creleases', 'app.Sreleases'];

    public function getFixturesList(): array
    {
        $pattern = [];

        for ($i=0; $i < 100; $i++) {
            $pattern[] = [
              ['Users', 'Deployments']
            ];
        }

        return $pattern;
    }

    /** @dataProvider getFixturesList */
    public function testFixturesLoading(array $fixtures)
    {
        call_user_func_array(array($this, 'loadFixtures'), $fixtures);
        $this->assertTrue(true);
    }
}
