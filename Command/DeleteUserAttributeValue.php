<?php

declare(strict_types=1);

namespace MsgPhp\User\Command;

use MsgPhp\Eav\AttributeValueId;

/**
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class DeleteUserAttributeValue
{
    public $attributeValueId;

    public function __construct(AttributeValueId $attributeValueId)
    {
        $this->attributeValueId = $attributeValueId;
    }
}
