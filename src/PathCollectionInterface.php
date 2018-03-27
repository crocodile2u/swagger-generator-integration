<?php

namespace SwaggerGenerator\Integration;

interface PathCollectionInterface extends \JsonSerializable
{
    /**
     * @param PathInterface $path
     * @return PathCollectionInterface
     * @throws \InvalidArgumentException
     */
    public function add(PathInterface $path);

    /**
     * @return PathInterface[]
     */
    public function asArray();

}