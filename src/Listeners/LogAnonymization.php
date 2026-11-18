<?php

namespace JeffersonGoncalves\CcpaAuditLog\Listeners;

use JeffersonGoncalves\CcpaAuditLog\AuditLogger;
use JeffersonGoncalves\Privacy\AuditLog\Listeners\LogAnonymization as BaseLogAnonymization;

class LogAnonymization extends BaseLogAnonymization
{
    public function __construct(AuditLogger $logger)
    {
        parent::__construct($logger);
    }
}
