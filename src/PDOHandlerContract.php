<?php

declare (strict_types = 1);

namespace Reglue4php\Contracts4db;

interface PDOHandlerContract
{
    /**
     * @return \PDO
     */
    public function getPdo();
}
