<?php
namespace App\Test\TestCase;

use App\TestSuite\TestCase;

class AllFixturesTest extends TestCase
{
    public $fixtures = ['app.Users', 'app.Deployments', 'app.Creleases', 'app.Sreleases'];

    public function getFixturesList(): array
    {
        $pattern = [];

        for ($i=0; $i < 100; $i++) {
            $pattern[] = [];
        }

        return $pattern;
    }

    /** @dataProvider getFixturesList */
    public function testFixturesLoading(?array $fixtures = [])
    {
        call_user_func_array(array($this, 'loadFixtures'), $fixtures);
        $this->assertTrue(true);
    }
}
