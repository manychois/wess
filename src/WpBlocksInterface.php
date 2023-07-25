<?php

namespace Manychois\Wess;

interface WpBlocksInterface
{
    public function registerBlockType(string $jsonDir): void;
}
