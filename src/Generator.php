<?php

namespace Melhorenvio\Generator;

interface Generator
{
    /**
     * Generate random office
     *
     * @return string
     */
    public function run() : string;
}
