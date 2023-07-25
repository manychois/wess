<?php

namespace Manychois\Wess;

/**
 * Defines the boilerplate for a WordPress plugin.
 */
abstract class AbstractPlugin
{
    public readonly string $baseUrl;
    public readonly string $file;
    public readonly WpAppInterface $wp;

    /**
     * Creates a new instance of the plugin.
     * @param string $file The path to the main plugin file.
     */
    public function __construct(string $file, WpAppInterface $wp)
    {
        $this->file = $file;
        $this->baseUrl = plugins_url('', $file);
        $this->wp = $wp;
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

    /**
     * Called when the plugin is initialized.
     */
    public function onInit(): void
    {
    }

    /**
     * Called when the plugin is uninstalled.
     */
    public function onUninstall(): void
    {
    }

    /**
     * Registers the first level hooks for the plugin.
     */
    public function registerFirstHooks(): void
    {
        $file = $this->file;
        register_activation_hook($file, [$this, 'onActivate']);
        register_deactivation_hook($file, [$this, 'onDeactivate']);
        add_action('init', [$this, 'onInit']);
    }
}
