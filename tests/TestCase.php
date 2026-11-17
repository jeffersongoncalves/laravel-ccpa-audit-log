<?php

namespace JeffersonGoncalves\CcpaAuditLog\Tests;

use JeffersonGoncalves\CcpaAuditLog\CcpaAuditLogServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            CcpaAuditLogServiceProvider::class,
        ];
    }
}
