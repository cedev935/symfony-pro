<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Fixtures\OtherAnnotatedClasses;

use Symfony\Component\Routing\Annotation\Route;

class VariadicClass
{
    #[Route('/path/to/{id}')]
    public function routeAction(...$params)
    {
    }
}
