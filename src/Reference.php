<?php

namespace SwaggerGenerator\Integration;

interface Reference
{
    /**
     * @return string
     */
    public function getResolverClassName();

    /**
     * @return TypeInterface
     */
    public function resolveSwaggerType();

        /**
     * @return string
     */
    public function getName();
}