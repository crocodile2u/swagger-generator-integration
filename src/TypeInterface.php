<?php

namespace SwaggerGenerator\Integration;

interface TypeInterface extends \JsonSerializable
{
    /**
     * @param $flag
     * @return mixed
     */
    public function setNullable($flag);

    /**
     * @param string $name
     * @param $value
     * @return mixed
     */
    public function addRule($name, $value);

    /**
     * @return string
     */
    public function asJson();
}