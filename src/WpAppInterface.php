<?php

namespace Manychois\Wess;

interface WpAppInterface
{
    public function actions(): WpActionsInterface;

    public function blocks(): WpBlocksInterface;

    public function deps(): WpDependencyInterface;
    
    public function filters(): WpFiltersInterface;
}
