<?php

namespace SwaggerGenerator\Integration;

interface SerializationContext
{
    /**
     * @param Reference $reference
     * @return void
     */
    public function registerReference(Reference $reference);
}