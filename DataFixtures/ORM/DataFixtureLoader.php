<?php

namespace Cekurte\FixturesBundle\DataFixtures\ORM;

use Hautelook\AliceBundle\Alice\DataFixtureLoader as Base;
use Nelmio\Alice\Fixtures;

class DataFixtureLoader extends Base
{
    /**
     * {@inheritDoc}
     */
    protected function getFixtures()
    {
        $cekurte_fixtures = $this->container->getParameter('cekurte_fixtures');

        $directory = $cekurte_fixtures['directory'];

        $fixtures = array();

        foreach ($cekurte_fixtures['resources'] as $fixture) {
            $fixtures[] = $directory . DIRECTORY_SEPARATOR . $fixture . '.yml';
        }

        return $fixtures;
    }
}
