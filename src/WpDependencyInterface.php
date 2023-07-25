<?php

namespace Manychois\Wess;

interface WpDependencyInterface
{
    public function addInlineScript(string $handle, string $content, bool $before = false): bool;

    public function enqueueScript(string $handle): void;

    public function enqueueStyleLink(string $handle): void;

    /**
     * Registers a new script to be enqueued later.
     *
     * @param string $handle   Name of the script. Should be unique.
     * @param array  $attrs    HTML attributes of the script tag.
     * @param array  $deps     An array of registered script handles this script depends on.
     * @param bool   $inFooter Whether to enqueue the script before `</body>` instead of in the `<head>`.
     * @return bool Whether the script has been registered. True on success, false on failure.
     */
    public function registerScript(string $handle, array $attrs, array $deps = [], bool $inFooter = false): bool;

    /**
     * Registers a new stylesheet to be enqueued later.
     * 
     * @param string $handle Name of the stylesheet. Should be unique.
     * @param array  $attrs  HTML attributes of the stylesheet `<link>` tag.
     * @param array  $deps   An array of registered stylesheet handles this stylesheet depends on.
     * @return bool Whether the style has been registered. True on success, false on failure.
     */
    public function registerStyleLink(string $handle, array $attrs, array $deps = []): bool;
}
