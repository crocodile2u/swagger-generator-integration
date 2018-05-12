<?php

namespace SwaggerGenerator\Integration;

interface ReferenceResolverInterface
{
    /**
     * @param SerializationContextInterface $context
     * @param string $name
     * @return ObjectTypeInterface
     */
    public function resolveSwaggerType(SerializationContextInterface $context, $name);
}