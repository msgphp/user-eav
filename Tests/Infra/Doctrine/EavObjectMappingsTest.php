<?php

declare(strict_types=1);

/*
 * This file is part of the MsgPHP package.
 *
 * (c) Roland Franssen <franssen.roland@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MsgPhp\User\Tests\Infra\Doctrine;

use MsgPhp\Domain\Infra\Doctrine\MappingConfig;
use MsgPhp\User\Infra\Doctrine\EavObjectMappings;
use PHPUnit\Framework\TestCase;

final class EavObjectMappingsTest extends TestCase
{
    public function testMapping(): void
    {
        $available = array_flip(array_map(function (string $file): string {
            return 'MsgPhp\\User\\Entity\\'.basename(\dirname($file)).'\\'.basename($file, '.php');
        }, array_merge(glob(\dirname(__DIR__, 3).'/Entity/Features/*.php'), glob(\dirname(__DIR__, 3).'/Entity/Fields/*.php'))));

        $mappings = EavObjectMappings::provideObjectMappings(new MappingConfig([]));
        $mappings = array_keys($mappings instanceof \Traversable ? iterator_to_array($mappings) : $mappings);
        sort($mappings);

        self::assertSame(array_keys($available), $mappings);
    }
}
