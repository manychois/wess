<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpActionsInterface;
use Manychois\Wess\WpAppInterface;
use Manychois\Wess\WpFiltersInterface;

class WpApp implements WpAppInterface
{
    public readonly WpActions $wpActions;
    public readonly WpFilters $wpFilters;

    public function __construct(WpActions $wpActions, WpFilters $wpFilters)
    {
        $this->wpActions = $wpActions;
        $this->wpFilters = $wpFilters;
    }

    public function actions(): WpActionsInterface
    {
        return $this->wpActions;
    }

    public function filters(): WpFiltersInterface
    {
        return $this->wpFilters;
    }
}
