<?php

declare (strict_types = 1);

namespace Reglue4php\Contracts4db;

interface ScriptLoaderContract
{
    /**
     * @param string $source
     *
     * @return mixed
     */
    public function load(string $source);

    /**
     * @param string $identifier
     *
     * @return array
     */
    public function getBindings(string $identifier): array;
}
