<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpBlocksInterface;

class WpBlocks implements WpBlocksInterface
{
    public function registerBlockType(string $jsonDir): void
    {
        register_block_type($jsonDir);
    }
}
