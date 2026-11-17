<?php

namespace JeffersonGoncalves\CcpaAuditLog;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaAuditLogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-ccpa-audit-log')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations();
    }
}
