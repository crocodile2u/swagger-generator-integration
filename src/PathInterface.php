<?php

namespace SwaggerGenerator\Integration;

interface PathInterface extends \JsonSerializable
{
    /**
     * @param string $httpVerb
     * @param EndpointInterface $endpoint
     * @return PathInterface $this
     */
    public function addEndpoint($httpVerb, EndpointInterface $endpoint);

    /**
     * @return string
     */
    public function getUri();
}