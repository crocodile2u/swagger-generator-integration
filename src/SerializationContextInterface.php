<?php

namespace SwaggerGenerator\Integration;

interface SerializationContextInterface
{
    /**
     * @param ReferenceInterface $reference
     * @return void
     */
    public function registerReference(ReferenceInterface $reference);
}