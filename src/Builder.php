<?php

namespace Youwe\DataDictionaryObjectBridgeBundle;


use DataDictionaryBundle\Graph\Interfaces\Visitor;
use DataDictionaryBundle\Graph\Visitor\NullVisitor;
use ObjectBridgeBundle\Model\DataObject\ClassDefinition\Data\ObjectBridge;

class Builder implements \DataDictionaryBundle\Interfaces\DataDictionary
{
    public static function getVisitor(string $className = null): Visitor
    {
        if (self::canVisit($className)) {
            return new ObjectBridgeVisitor();
        }
        return new NullVisitor();
    }

    public static function canVisit(string $className): bool
    {
        return ObjectBridge::class == $className;
    }

}
