<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpFiltersInterface;

class WpFilters implements WpFiltersInterface
{
    public function add(string $hookName, callable $callback, int $priority = 10, int $acceptedArgs = 1): void
    {
        add_filter($hookName, $callback, $priority, $acceptedArgs);
    }

    public function apply(string $hookName, mixed $value, mixed ...$args): mixed
    {
        return apply_filters($hookName, $value, ...$args);
    }
}