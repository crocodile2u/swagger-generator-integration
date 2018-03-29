<?php

namespace SwaggerGenerator\Integration;

interface ReferenceResolver
{
    /**
     * @param SerializationContext $context
     * @param string $name
     * @return ObjectTypeInterface
     */
    public function resolveSwaggerType(SerializationContext $context, $name);
}