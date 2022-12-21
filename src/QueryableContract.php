<?php

declare (strict_types = 1);

namespace Reglue4php\Contracts4db;

interface QueryableContract
{
    /**
     * Get the default fetch mode for the connection.
     *
     * @return int
     */
    public function getFetchMode(): int;

    /**
     * @param string $statement
     * @param array $bindings
     *
     * @return mixed
     */
    public function fetchOne(string $statement, array $bindings = []);

    /**
     * @param string $statement
     * @param array $bindings
     *
     * @return array
     */
    public function fetchAll(string $statement, array $bindings = []): array;
}
