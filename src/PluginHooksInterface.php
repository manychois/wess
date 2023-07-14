<?php

namespace Manychois\Wess;

interface PluginHooksInterface
{
    public function registerActivation(string $file, callable $callback);
}
