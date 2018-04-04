<?php

namespace SwaggerGenerator\Integration;

interface ParameterInterface extends \JsonSerializable
{
    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function locatedIn();

    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);
}