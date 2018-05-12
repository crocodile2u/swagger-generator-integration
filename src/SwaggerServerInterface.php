<?php

namespace SwaggerGenerator\Integration;

interface SwaggerServerInterface
{
    /**
     * @param SerializationContextInterface $context
     * @return PathCollectionInterface
     */
    public static function getSwaggerPaths(SerializationContextInterface $context);
}