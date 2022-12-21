<?php

declare (strict_types = 1);

namespace Reglue4php\Contracts4db;

interface BrokerContract
{
    /**
     * @return string
     */
    public function getDriver();

    /**
     * @return mixed
     */
    public function getHandler();

    /**
     * Execute an SQL statement and return mixed result.
     * The returned result depends on the handler
     *
     * @param  string $statement
     * @param  array  $bindings
     *
     * @return mixed
     */
    public function execute(string $statement, $bindings = []);
}
