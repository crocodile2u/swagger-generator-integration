<?php

namespace SwaggerGenerator\Integration;

interface ReferenceResolver
{
    /**
     * @param string $name
     * @return ObjectTypeInterface
     */
    public static function resolveSwaggerType($name);
}