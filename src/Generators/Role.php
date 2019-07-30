<?php

namespace Melhorenvio\Generator\Generators;

use Melhorenvio\Generator\Generator;

class Role implements Generator
{
    /**
     * offices
     * @var array
     */
    protected $offices = [
        'Programador',
        'Desenvolvedor',
        'Estagiário',
    ];

    /**
     * Types
     * @var array
     */
    protected $types = [
        'Backend',
        'Frontend',
        'DevOps',
        'Quality Assurance',
    ];

    /**
     * Levels
     * @var array
     */
    protected $levels = [
        'Master',
        'Sênior',
        'Pleno',
        'Junior',
    ];

    /**
     * Generate random office
     *
     * @return string
     */
    public function run() : string
    {
        return sprintf(
            '%s %s %s',
            $this->office(),
            $this->type(),
            $this->level()
        );
    }

    /**
     * Get ramdom office
     *
     * @return string
     */
    public function office() : string
    {
        return $this->random($this->offices);
    }

    /**
     * Get random type
     *
     * @return string
     */
    public function type() : string
    {
        return $this->random($this->types);
    }

    /**
     * Get random level
     *
     * @return string
     */
    public function level() : string
    {
        return $this->random($this->levels);
    }

    /**
     * Define new offices
     *
     * @param array $offices
     */
    public function setOffices(array $offices)
    {
        $this->offices = $offices;
    }

    /**
     * Define new types
     *
     * @param array $types
     */
    public function setTypes(array $types)
    {
        $this->types = $types;
    }

    /**
     * Define new levels
     *
     * @param array $levels
     */
    public function setLevels(array $levels)
    {
        $this->levels = $levels;
    }

    /**
     * Get random value from array.
     *
     * @param  array  $data
     * @return string
     */
    protected function random(array $data) : string
    {
        return $data[array_rand($data)];
    }
}
