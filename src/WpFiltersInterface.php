<?php

namespace Manychois\Wess;

interface WpFiltersInterface
{
    public function add(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): void;

    public function apply(string $hookName, mixed $value, mixed ...$args): mixed;
}
