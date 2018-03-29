<?php

namespace SwaggerGenerator\Integration;

interface ReferenceResolver
{
    /**
     * @param SerializationContext $context
     * @param string $name
     * @return ObjectTypeInterface
     */
    public static function resolveSwaggerType(SerializationContext $context, $name);
}