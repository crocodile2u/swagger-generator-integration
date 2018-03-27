<?php

namespace SwaggerGenerator\Integration;

interface Controller
{
    /**
     * @return PathCollectionInterface
     */
    public static function getSwaggerPaths(SerializationContext $context);
}