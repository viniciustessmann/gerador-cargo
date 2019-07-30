<?php

namespace Melhorenvio\Generator\Tests;

use Melhorenvio\Generator\Generator;
use Melhorenvio\Generator\Generators\Role;
use PHPUnit\Framework\TestCase;

class GeneratorTest extends TestCase
{
    /**
     * Role Instance
     * @var Role
     */
    protected static $role;

    /**
     * Call this template method before each test method is run.
     */
    protected function setUp()
    {
        self::$role = new Role();
    }

    /** @test */
    public function check_implements_generator()
    {
        $this->assertTrue(self::$role instanceof Generator);
    }

    /** @test */
    public function check_role_is_string()
    {
        $role = self::$role->run();

        $this->assertTrue(is_string($role), "Got a " . gettype($role) . " instead of a string");
    }

    /** @test */
    public function check_random_roles()
    {
        self::$role->setOffices(range(0, 100));
        self::$role->setTypes(range(0, 100));
        self::$role->setLevels(range(0, 100));

        $this->assertNotEquals(self::$role->run(), self::$role->run());
    }

    /** @test */
    public function check_set_offices_method()
    {
        self::$role->setOffices(['phpunit']);

        $this->assertContains('phpunit', self::$role->run());
    }

    /** @test */
    public function check_set_types_method()
    {
        self::$role->setTypes(['phpunit']);

        $this->assertContains('phpunit', self::$role->run());
    }

    /** @test */
    public function check_set_levels_method()
    {
        self::$role->setLevels(['phpunit']);

        $this->assertContains('phpunit', self::$role->run());
    }

    /** @test */
    public function checks_run_method()
    {
        self::$role->setOffices(['phpunit']);
        self::$role->setTypes(['phpunit']);
        self::$role->setLevels(['phpunit']);

        $this->assertEquals('phpunit phpunit phpunit', self::$role->run());
    }
}
