<?php

namespace JeffersonGoncalves\CcpaAuditLog;

use Illuminate\Support\Facades\Event;
use JeffersonGoncalves\Ccpa\Events\PersonalDataAnonymized;
use JeffersonGoncalves\CcpaAuditLog\Commands\VerifyCommand;
use JeffersonGoncalves\CcpaAuditLog\Listeners\LogAnonymization;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CcpaAuditLogServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('ccpa-audit-log')
            ->hasConfigFile()
            ->hasMigrations(['create_ccpa_audit_logs_table'])
            ->hasCommand(VerifyCommand::class);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(AuditLogger::class);
    }

    public function packageBooted(): void
    {
        if (config('ccpa-audit-log.log_anonymizations', true)) {
            Event::listen(PersonalDataAnonymized::class, LogAnonymization::class);
        }
    }
}
