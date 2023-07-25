<?php

namespace Manychois\Wess\Implementations;

use Manychois\Wess\WpDependencyInterface;

class WpDependency implements WpDependencyInterface
{
    public function addInlineScript(string $handle, string $content, bool $before = false): bool
    {
        return wp_add_inline_script($handle, $content, $before ? 'before' : 'after');
    }

    public function enqueueScript(string $handle): void
    {
        wp_enqueue_script($handle);
    }

    public function enqueueStyleLink(string $handle): void
    {
        wp_enqueue_style($handle);
    }

    public function registerScript(string $handle, array $attrs, array $deps = [], bool $inFooter = false): bool
    {
        $src = $attrs['src'] ?? '';
        return wp_register_script($handle, $src, $deps, null, $inFooter);
    }

    public function registerStyleLink(string $handle, array $attrs, array $deps = []): bool {
        $src = $attrs['href'] ?? '';
        return wp_register_style($handle, $src, $deps, null, null);
    }
}
