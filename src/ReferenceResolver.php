<?php

namespace SwaggerGenerator\Integration;

interface ReferenceResolver
{
    /**
     * @return ObjectTypeInterface
     */
    public static function resolveSwaggerType();
}