<?php

namespace SwaggerGenerator\Integration;

interface EndpointInterface extends \JsonSerializable
{
    /**
     * @param string $summary
     * @return $this
     */
    public function setSummary($summary);


    /**
     * @param string $description
     * @return $this
     */
    public function setDescription($description);

    /**
     * @param string $operationId
     * @return $this
     */
    public function setOperationId($operationId);

    /**
     * @param string $type
     * @return $this
     */
    public function addResponseContentType($type);

    /**
     * @param string[] $types
     * @return $this
     */
    public function replaceResponseContentTypes(array $types);

    /**
     * @param ParameterInterface[] $parameters
     * @return $this
     */
    public function setParameters(array $parameters);

    /**
     * @param ParameterInterface[] $parameters
     * @param bool $override
     * @return $this
     */
    public function mergeParameters(array $parameters, $override);

    /**
     * @param ParameterInterface $parameter
     * @return $this
     */
    public function addParameter(ParameterInterface $parameter);

    /**
     * @param string|ParameterInterface $search
     * @return array [int, ParameterInterface] | [null, null]
     */
    public function findParameter($search);

    /**
     * @param string $code
     * @param ResponseInterface $response
     * @return $this
     */
    public function addResponse($code, ResponseInterface $response);
}