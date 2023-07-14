<?php

namespace Manychois\Wess;

/**
 * Defines the boilerplate for a WordPress plugin.
 */
abstract class AbstractPlugin
{
    /**
     * Called when the plugin is uninstalled.
     */
    public static function onUninstall(WpAppInterface $wp): void
    {
    }

    public readonly string $file;
    public readonly string $baseUrl;
    private readonly WpAppInterface $wp;

    /**
     * Creates a new instance of the plugin.
     * @param string $file The path to the main plugin file.
     */
    public function __construct(string $file, WpAppInterface $wp)
    {
        $this->file = $file;
        $this->baseUrl = plugins_url('', $file);
        $this->wp = $wp;
        register_activation_hook($file, [$this, 'onActivate']);
        register_deactivation_hook($file, [$this, 'onDeactivate']);
    }

    /**
     * Called when the plugin is activated.
     */
    public function onActivate(): void
    {
    }

    /**
     * Called when the plugin is deactivated.
     */
    public function onDeactivate(): void
    {
    }
}
