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

namespace MsgPhp\User\Command;

use MsgPhp\Eav\AttributeValueIdInterface;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class DeleteUserAttributeValueCommand
{
    /**
     * @var AttributeValueIdInterface
     */
    public $attributeValueId;

    final public function __construct(AttributeValueIdInterface $attributeValueId)
    {
        $this->attributeValueId = $attributeValueId;
    }
}
