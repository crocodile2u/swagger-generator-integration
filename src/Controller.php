<?php

namespace SwaggerGenerator\Integration;

interface Controller
{
    /**
     * @return PathCollectionInterface|array
     */
    public static function getSwaggerPaths();
}