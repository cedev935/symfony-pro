<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Bridge\Doctrine\Tests\DataFixtures;

use PHPUnit\Framework\TestCase;
use Symfony\Bridge\Doctrine\DataFixtures\ContainerAwareLoader;
use Symfony\Bridge\Doctrine\Tests\Fixtures\ContainerAwareFixture;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @group legacy
 */
class ContainerAwareLoaderTest extends TestCase
{
    public function testShouldSetContainerOnContainerAwareFixture()
    {
        $container = $this->createMock(ContainerInterface::class);
        $loader = new ContainerAwareLoader($container);
        $fixture = new ContainerAwareFixture();

        $loader->addFixture($fixture);

        $this->assertSame($container, $fixture->container);
    }
}
