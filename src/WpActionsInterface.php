<?php

namespace Manychois\Wess;

interface WpActionsInterface
{
    public function add(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): void;

    public function run(string $hookName, mixed ...$args): void;
}
