<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpActionsInterface;
use Manychois\Wess\WpBlocksInterface;
use Manychois\Wess\WpDependencyInterface;
use Manychois\Wess\WpFiltersInterface;

class WpAppArgs
{
    public WpActionsInterface $actions;
    public WpBlocksInterface $blocks;
    public WpDependencyInterface $deps;
    public WpFiltersInterface $filters;
}
