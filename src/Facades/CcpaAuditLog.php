<?php

namespace JeffersonGoncalves\CcpaAuditLog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JeffersonGoncalves\CcpaAuditLog\CcpaAuditLog
 */
class CcpaAuditLog extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-ccpa-audit-log';
    }
}
