<?php

namespace SwaggerGenerator\Integration;

interface ParameterInterface extends \JsonSerializable
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);
}