<?php

namespace SwaggerGenerator\Integration;

interface ReferenceResolver
{
    /**
     * @param SerializationContext $context
     * @return ObjectTypeInterface
     */
    public static function resolveSwaggerType(SerializationContext $context);
}