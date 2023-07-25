<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpActionsInterface;

class WpActions implements WpActionsInterface
{
    public function add(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): void
    {
        add_action($hookName, $callback, $priority, $acceptedArgs);
    }

    public function run(string $hookName, mixed ...$args): void
    {
        do_action($hookName, ...$args);
    }
}