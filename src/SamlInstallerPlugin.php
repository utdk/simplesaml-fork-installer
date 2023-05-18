<?php

/**
 * This file is part of the Pantheon SAML Integration plugin.
 *
 * Copyright (C) 2019-2021 by The University of Texas at Austin.
 */

namespace Utexas\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Composer plugin to setup SAML authentication for Pantheon hosted sites.
 */
class SamlInstallerPlugin implements PluginInterface {

    private $installer;

    public function activate(Composer $composer, IOInterface $io)
    {
        $this->installer = new SimplesamlInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($this->installer);
    }

    /**
     * {@inheritdoc}
     */
    public function deactivate(Composer $composer, IOInterface $io)
    {
        $composer->getInstallationManager()->removeInstaller($this->installer);
    }

    /**
     * {@inheritdoc}
     */
    public function uninstall(Composer $composer, IOInterface $io)
    {
    }

}
