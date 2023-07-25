<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpActionsInterface;
use Manychois\Wess\WpAppInterface;
use Manychois\Wess\WpBlocksInterface;
use Manychois\Wess\WpDependencyInterface;
use Manychois\Wess\WpFiltersInterface;

class WpApp implements WpAppInterface
{
    private readonly WpActions $wpActions;
    private readonly WpBlocks $wpBlocks;
    private readonly WpDependency $wpDependency;
    private readonly WpFilters $wpFilters;

    public function __construct(WpAppArgs $args)
    {
        $this->wpActions = $args->actions;
        $this->wpBlocks = $args->blocks;
        $this->wpDependency = $args->deps;
        $this->wpFilters = $args->filters;
    }

    public function actions(): WpActionsInterface
    {
        return $this->wpActions;
    }

    public function blocks(): WpBlocksInterface
    {
        return $this->wpBlocks;
    }

    public function deps(): WpDependencyInterface
    {
        return $this->wpDependency;
    }

    public function filters(): WpFiltersInterface
    {
        return $this->wpFilters;
    }
}
