<?php

namespace SwaggerGenerator\Integration;

interface Controller
{
    /**
     * @param SerializationContext $context
     * @return PathCollectionInterface
     */
    public static function getSwaggerPaths(SerializationContext $context);
}