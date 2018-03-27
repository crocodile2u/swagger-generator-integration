<?php

namespace SwaggerGenerator\Integration;

interface ObjectTypeInterface extends TypeInterface
{
    /**
     * @param $name
     * @param TypeInterface $type
     * @param bool $required
     * @return mixed
     */
    public function addProperty($name, TypeInterface $type, $required = false);
}