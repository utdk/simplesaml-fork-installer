<?php

namespace utexas\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller as BaseLibraryInstaller;

class SimplesamlInstaller extends BaseLibraryInstaller
{
    /**
     * @inheritDoc
     */
    public function getInstallPath(PackageInterface $package)
    {
        if ($package->getPrettyName() === 'utexas/simplesamlphp') {
            return 'vendor/simplesamlphp/simplesamlphp';
        }
       return parent::getInstallPath($package);
    }
}
