<?php

namespace Manychois\Wess;

interface WpAppInterface
{
    public function actions(): WpActionsInterface;
    public function filters(): WpFiltersInterface;
}
